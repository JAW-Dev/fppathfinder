<?php
/**
 * Table
 *
 * @package    Custom_Reports
 * @subpackage Custom_Reports/Includes/Classes/Enterprise
 * @author     Objectiv
 * @copyright  Copyright (c) 2021, Objectiv
 * @license    GPL-2.0
 * @version    1.0.0
 */

namespace CustomReports\Pdfs;

if ( ! defined( 'WPINC' ) ) {
	wp_die( 'No Access Allowed!', 'Error!', array( 'back_link' => true ) );
}

/**
 * WP_List_Table
 */
if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

/**
 * Table
 *
 * @author Jason Witt
 * @since  1.0.0
 */
class Table extends \WP_List_Table {

	/**
	 * Sho Posts Amount
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @var int
	 */
	protected $show_posts_amount = 25;

	/**
	 * Table Slug
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @var string
	 */
	protected $slug = 'pdfs-report';

	/**
	 * Initialize the class
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct(
			array(
				'singular' => __( 'PDF Downloads Report', ' custom-reports' ),
				'plural'   => __( 'PDF Downloads Reports', ' custom-reports' ),
				'ajax'     => false,
			)
		);
	}

	/**
	 * Prepare Items
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @return void
	 */
	public function prepare_items() {
		$search_key = isset( $_REQUEST['s'] ) ? wp_unslash( trim( $_REQUEST['s'] ) ) : ''; // phpcs:ignore
		$columns    = $this->get_columns();
		$hidden     = $this->get_hidden_columns();
		$sortable   = $this->get_sortable_columns();
		$data       = $this->table_data();

		usort( $data, array( $this, 'sort_data' ) );

		if ( $search_key ) {
			$data = $this->filter_table_data( $data, $search_key );
		}

		$per_page     = $this->get_items_per_page( 'posts_per_page', $this->show_posts_amount );
		$current_page = $this->get_pagenum();
		$total_items  = count( $data );

		$this->set_pagination_args(
			array(
				'total_items' => $total_items,
				'per_page'    => $per_page,
			)
		);

		$data = array_slice( $data, ( ( $current_page - 1 ) * $per_page ), $per_page );

		$this->_column_headers = array( $columns, $hidden, $sortable );

		$this->items = $data;
	}

	/**
	 * Display Table Nav
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @param string $which The setion of the table (top, bottom).
	 *
	 * @return void
	 */
	public function display_tablenav( $which ) {
		?>
		<div class="tablenav <?php echo esc_attr( $which ); ?>">
			<?php
			if ( 'top' === $which ) {
				$this->pagination( $which );
			}

			if ( 'bottom' === $which ) {
				$this->pagination( $which );
				?>
				<form method="get" action="/">
					<button id="<?php echo esc_attr( $this->slug ); ?>" class="button" data-nonce="<?php echo esc_attr( $this->slug ); ?>">Download <?php echo esc_html( $this->title ); ?> CSV</button>
				</form>
				<?php
			}
			?>
		</div>
		<?php
	}

	/**
	 * Table Data
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @return array
	 */
	public function table_data() {
		return Data::get_data();
	}

	/**
	 * Filter Table Data
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @param array  $table_data The table data array.
	 * @param string $search_key The search term.
	 *
	 * @return array
	 */
	public function filter_table_data( $table_data, $search_key ) {
		$filtered_table_data = array_values(
			array_filter(
				$table_data,
				function( $row ) use ( $search_key ) {
					foreach ( $row as $row_val ) {
						if ( stripos( $row_val, $search_key ) !== false ) {
							return true;
						}
					}
				}
			)
		);
		return $filtered_table_data;
	}

	/**
	 * Get Columns
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @return array
	 */
	public function get_columns() {
		$columns = array(
			'ID'        => __( 'ID', 'custom-reports' ),
			'title'     => __( 'Title', 'custom-reports' ),
			'downloads' => __( 'Downloads', 'custom-reports' ),
		);

		return $columns;
	}

	/**
	 * Get Hidden Columns
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @return array
	 */
	public function get_hidden_columns() {
		return array();
	}

	/**
	 * Get Sortable Columns
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @return array
	 */
	public function get_sortable_columns() {
		$sortable = array(
			'ID'        => array( 'ID', true ),
			'title'     => array( 'title', true ),
			'downloads' => array( 'downloads', true ),
		);

		return $sortable;
	}

	/**
	 * Column Defualt
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @param  array  $item        The data for the item.
	 * @param  string $column_name Current column name.
	 *
	 * @return mixed
	 */
	public function column_default( $item, $column_name ) {
		switch ( $column_name ) {
			case 'ID':
			case 'title':
			case 'downloads':
				return $item[ $column_name ];
			default:
				return print_r( $item, true ) ; // phpcs:ignore
		}
	}

	/**
	 * Sort Data
	 *
	 * @author Jason Witt
	 * @since  1.0.0
	 *
	 * @param string $a Item A.
	 * @param string $b Item B.
	 *
	 * @return array
	 */
	public function sort_data( $a, $b ) {
		// Set defaults.
		$orderby = 'downloads';
		$order   = 'asc';

		// If orderby is set, use this as the sort column.
		if ( ! empty( $_GET['orderby'] ) ) { // phpcs:ignore
			$orderby = $_GET['orderby']; // phpcs:ignore
		}

		// If order is set use this as the order.
		if ( ! empty( $_GET['order'] ) ) { // phpcs:ignore
			$order = $_GET['order']; // phpcs:ignore
		}

		$result = strnatcmp( $a[ $orderby ], $b[ $orderby ] );

		if ( 'desc' === $order ) {
			return $result;
		}

		return -$result;
	}
}
