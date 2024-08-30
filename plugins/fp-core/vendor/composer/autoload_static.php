<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9d0396006247d76d066c34d51e88f48
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '8e6bd4f2f25bcfbcf518b1efa16701d4' => __DIR__ . '/../..' . '/includes/Functions/Utilities/Checklist/fp_get_crm_client_name.php',
        '9d7e12f4823225d1143b1bfaff220a8d' => __DIR__ . '/../..' . '/includes/Functions/Utilities/Checklist/fp_get_share_link_db_entry.php',
        'bc518e25a27cd2c520247fe8afc36ee5' => __DIR__ . '/../..' . '/includes/Functions/Utilities/Features/fp_is_feature_active.php',
        'f1c8f9f06c8d4b872e464d4bc20f0d0f' => __DIR__ . '/../..' . '/includes/Functions/Utilities/Formatting/fp_custom_text_tags.php',
        '751881ceb56fa8e83e1359f27f7c3c45' => __DIR__ . '/../..' . '/includes/Functions/main.php',
        'b067391b6600d5412e7ac0572a45a660' => __DIR__ . '/../..' . '/includes/Functions/Utilities/membership.php',
        '4e19d8fa0e1d9b90bd15a353a2ce33b2' => __DIR__ . '/../..' . '/includes/Functions/Utilities/page.php',
        'cfb3b4078a46dcd38eabeee133f13d00' => __DIR__ . '/../..' . '/includes/Functions/Utilities/register.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'F' => 
        array (
            'FP_Core\\' => 8,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'FP_Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'FP_Core\\Account_Overview_Controller' => __DIR__ . '/../..' . '/includes/Account_Overview_Controller.php',
        'FP_Core\\Admin\\GroupMembers\\AcSync' => __DIR__ . '/../..' . '/includes/Admin/GroupMembers/AcSync.php',
        'FP_Core\\Admin\\GroupMembers\\AcSyncGroup' => __DIR__ . '/../..' . '/includes/Admin/GroupMembers/AcSyncGroup.php',
        'FP_Core\\Admin\\Main' => __DIR__ . '/../..' . '/includes/Admin/Main.php',
        'FP_Core\\Admin\\RCP\\AcSync' => __DIR__ . '/../..' . '/includes/Admin/RCP/AcSync.php',
        'FP_Core\\Admin\\RCP\\CompedMembership' => __DIR__ . '/../..' . '/includes/Admin/RCP/CompedMembership.php',
        'FP_Core\\Admin\\RCP\\Discounts\\Main' => __DIR__ . '/../..' . '/includes/Admin/RCP/Discounts/Main.php',
        'FP_Core\\Admin\\RCP\\Discounts\\MemberDiscountCodes' => __DIR__ . '/../..' . '/includes/Admin/RCP/Discounts/MemberDiscountCodes.php',
        'FP_Core\\Admin\\RCP\\Discounts\\View' => __DIR__ . '/../..' . '/includes/Admin/RCP/Discounts/View.php',
        'FP_Core\\Admin\\RCP\\Groups\\GroupType' => __DIR__ . '/../..' . '/includes/Admin/RCP/Groups/GroupType.php',
        'FP_Core\\Admin\\RCP\\Groups\\Main' => __DIR__ . '/../..' . '/includes/Admin/RCP/Groups/Main.php',
        'FP_Core\\Admin\\RCP\\Groups\\View' => __DIR__ . '/../..' . '/includes/Admin/RCP/Groups/View.php',
        'FP_Core\\Admin\\RCP\\MembershipTable' => __DIR__ . '/../..' . '/includes/Admin/RCP/MembershipTable.php',
        'FP_Core\\Admin\\RCP\\Reinvite' => __DIR__ . '/../..' . '/includes/Admin/RCP/Reinvite.php',
        'FP_Core\\Admin_AJAX\\Endpoints\\EndpointInterface' => __DIR__ . '/../..' . '/includes/Admin_AJAX/Endpoints/EndpointInterface.php',
        'FP_Core\\Admin_AJAX\\Endpoints\\PDFBundleGenerator' => __DIR__ . '/../..' . '/includes/Admin_AJAX/Endpoints/PDFBundleGenerator.php',
        'FP_Core\\Admin_AJAX\\Endpoints\\PDFBundleGeneratorProgressReporter' => __DIR__ . '/../..' . '/includes/Admin_AJAX/Endpoints/PDFBundleGeneratorProgressReporter.php',
        'FP_Core\\Admin_AJAX\\Endpoints\\PDFBundleProcessCreator' => __DIR__ . '/../..' . '/includes/Admin_AJAX/Endpoints/PDFBundleProcessCreator.php',
        'FP_Core\\Admin_AJAX\\Endpoints\\Registrar' => __DIR__ . '/../..' . '/includes/Admin_AJAX/Endpoints/Registrar.php',
        'FP_Core\\Admin_AJAX\\Main' => __DIR__ . '/../..' . '/includes/Admin_AJAX/Main.php',
        'FP_Core\\All_RCP_Memberships_Getter' => __DIR__ . '/../..' . '/includes/All_RCP_Memberships_Getter.php',
        'FP_Core\\ChecklistController' => __DIR__ . '/../..' . '/includes/ChecklistController.php',
        'FP_Core\\Constants' => __DIR__ . '/../..' . '/includes/Constants.php',
        'FP_Core\\Crms\\Apis\\RedtailAPI' => __DIR__ . '/../..' . '/includes/Crms/Apis/RedtailAPI.php',
        'FP_Core\\Crms\\Apis\\SalesforceAPI' => __DIR__ . '/../..' . '/includes/Crms/Apis/SalesforceAPI.php',
        'FP_Core\\Crms\\Apis\\WealthboxAPI' => __DIR__ . '/../..' . '/includes/Crms/Apis/WealthboxAPI.php',
        'FP_Core\\Crms\\Apis\\Xlr8API' => __DIR__ . '/../..' . '/includes/Crms/Apis/Xlr8API.php',
        'FP_Core\\Crms\\ContactLookup\\ContactNameGetter' => __DIR__ . '/../..' . '/includes/Crms/ContactLookup/ContactNameGetter.php',
        'FP_Core\\Crms\\ContactLookup\\Lookup' => __DIR__ . '/../..' . '/includes/Crms/ContactLookup/Lookup.php',
        'FP_Core\\Crms\\ContactLookup\\Template' => __DIR__ . '/../..' . '/includes/Crms/ContactLookup/Template.php',
        'FP_Core\\Crms\\IntegrateCrms' => __DIR__ . '/../..' . '/includes/Crms/IntegrateCrms.php',
        'FP_Core\\Crms\\Main' => __DIR__ . '/../..' . '/includes/Crms/Main.php',
        'FP_Core\\Crms\\NoteCreator' => __DIR__ . '/../..' . '/includes/Crms/NoteCreator.php',
        'FP_Core\\Crms\\Notes\\Checklist' => __DIR__ . '/../..' . '/includes/Crms/Notes/Checklist.php',
        'FP_Core\\Crms\\Notes\\Flowchart' => __DIR__ . '/../..' . '/includes/Crms/Notes/Flowchart.php',
        'FP_Core\\Crms\\Notes\\PlainText' => __DIR__ . '/../..' . '/includes/Crms/Notes/PlainText.php',
        'FP_Core\\Crms\\Notes\\Salesforce' => __DIR__ . '/../..' . '/includes/Crms/Notes/Salesforce.php',
        'FP_Core\\Crms\\Redtail\\RedtailUserIntegration' => __DIR__ . '/../..' . '/includes/Crms/Redtail/RedtailUserIntegration.php',
        'FP_Core\\Crms\\SalesForce\\OAuthBase' => __DIR__ . '/../..' . '/includes/Crms/SalesForce/OAuthBase.php',
        'FP_Core\\Crms\\SalesForce\\OAuthController' => __DIR__ . '/../..' . '/includes/Crms/SalesForce/OAuthController.php',
        'FP_Core\\Crms\\SalesForce\\SalesforceUserIntegration' => __DIR__ . '/../..' . '/includes/Crms/SalesForce/SalesforceUserIntegration.php',
        'FP_Core\\Crms\\UserIntegrationAbstract' => __DIR__ . '/../..' . '/includes/Crms/UserIntegrationAbstract.php',
        'FP_Core\\Crms\\UserIntegrationsList' => __DIR__ . '/../..' . '/includes/Crms/UserIntegrationsList.php',
        'FP_Core\\Crms\\Utilities' => __DIR__ . '/../..' . '/includes/Crms/Utilities.php',
        'FP_Core\\Crms\\Wealthbox\\OAuthController' => __DIR__ . '/../..' . '/includes/Crms/Wealthbox/OAuthController.php',
        'FP_Core\\Crms\\Wealthbox\\WealthboxUserIntegration' => __DIR__ . '/../..' . '/includes/Crms/Wealthbox/WealthboxUserIntegration.php',
        'FP_Core\\Crms\\XLR8\\OAuthController' => __DIR__ . '/../..' . '/includes/Crms/XLR8/OAuthController.php',
        'FP_Core\\Crms\\XLR8\\XLR8UserIntegration' => __DIR__ . '/../..' . '/includes/Crms/XLR8/XLR8UserIntegration.php',
        'FP_Core\\Cron' => __DIR__ . '/../..' . '/includes/Cron.php',
        'FP_Core\\Datastores\\Database_Datastore' => __DIR__ . '/../..' . '/includes/Datastores/Database_Datastore.php',
        'FP_Core\\Downloads\\Bundles\\Customer_Note_Adder' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Customer_Note_Adder.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Bundle_Generator_Controller' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Bundle_Generator_Controller.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Generator' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Generator.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Main' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Main.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Process' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Process.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Process_Creation_Controller' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Process_Creation_Controller.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Process_Datastore' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Process_Datastore.php',
        'FP_Core\\Downloads\\Bundles\\Generator\\Progress_Reporter' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Generator/Progress_Reporter.php',
        'FP_Core\\Downloads\\Bundles\\Main' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Main.php',
        'FP_Core\\Downloads\\Bundles\\Progress_Viewer_JS_Loader' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Progress_Viewer_JS_Loader.php',
        'FP_Core\\Downloads\\Bundles\\User_Meta_Adder' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/User_Meta_Adder.php',
        'FP_Core\\Downloads\\Bundles\\Zipper' => __DIR__ . '/../..' . '/includes/Downloads/Bundles/Zipper.php',
        'FP_Core\\Downloads\\Main' => __DIR__ . '/../..' . '/includes/Downloads/Main.php',
        'FP_Core\\EnqueueScripts' => __DIR__ . '/../..' . '/includes/EnqueueScripts.php',
        'FP_Core\\EnqueueStyles' => __DIR__ . '/../..' . '/includes/EnqueueStyles.php',
        'FP_Core\\EnterpriseEssentialsSettings' => __DIR__ . '/../..' . '/includes/EnterpriseEssentialsSettings.php',
        'FP_Core\\Essentials_Trial_Membership\\Main' => __DIR__ . '/../..' . '/includes/Essentials_Trial_Membership/Main.php',
        'FP_Core\\Essentials_Trial_Membership\\Meta_Controller' => __DIR__ . '/../..' . '/includes/Essentials_Trial_Membership/Meta_Controller.php',
        'FP_Core\\Essentials_Trial_Membership\\Redirect' => __DIR__ . '/../..' . '/includes/Essentials_Trial_Membership/Redirect.php',
        'FP_Core\\Essentials_Trial_Membership\\Registration_Field' => __DIR__ . '/../..' . '/includes/Essentials_Trial_Membership/Registration_Field.php',
        'FP_Core\\Essentials_Trial_Membership\\Settings' => __DIR__ . '/../..' . '/includes/Essentials_Trial_Membership/Settings.php',
        'FP_Core\\Existing_Membership_Discounter' => __DIR__ . '/../..' . '/includes/Existing_Membership_Discounter.php',
        'FP_Core\\FacetWP\\Search' => __DIR__ . '/../..' . '/includes/FacetWP/Search.php',
        'FP_Core\\GroupController' => __DIR__ . '/../..' . '/includes/GroupController.php',
        'FP_Core\\Group_Settings\\Admin_Group_Settings' => __DIR__ . '/../..' . '/includes/Group_Settings/Admin_Group_Settings.php',
        'FP_Core\\Group_Settings\\Database' => __DIR__ . '/../..' . '/includes/Group_Settings/Database.php',
        'FP_Core\\Group_Settings\\Front_End_Group_Settings' => __DIR__ . '/../..' . '/includes/Group_Settings/Front_End_Group_Settings.php',
        'FP_Core\\Group_Settings\\Main' => __DIR__ . '/../..' . '/includes/Group_Settings/Main.php',
        'FP_Core\\Group_Settings\\Settings\\Checkbox' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/Checkbox.php',
        'FP_Core\\Group_Settings\\Settings\\EnableEmailDefaultSetting' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/EnableEmailDefaultSetting.php',
        'FP_Core\\Group_Settings\\Settings\\EnableMemberEditBuisinessDisplayName' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/EnableMemberEditBuisinessDisplayName.php',
        'FP_Core\\Group_Settings\\Settings\\EnableMemberEditLogo' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/EnableMemberEditLogo.php',
        'FP_Core\\Group_Settings\\Settings\\EnableMemberdEditColorScheme' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/EnableMemberdEditColorScheme.php',
        'FP_Core\\Group_Settings\\Settings\\Enable_No_Advisor_Names_On_PDFs' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/Enable_No_Advisor_Names_On_PDFs.php',
        'FP_Core\\Group_Settings\\Settings\\GroupMembersDiscountCode' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/GroupMembersDiscountCode.php',
        'FP_Core\\Group_Settings\\Settings\\No_Advisor_Names_On_PDFs' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/No_Advisor_Names_On_PDFs.php',
        'FP_Core\\Group_Settings\\Settings\\Setting' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/Setting.php',
        'FP_Core\\Group_Settings\\Settings\\Settings_Registrar' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/Settings_Registrar.php',
        'FP_Core\\Group_Settings\\Settings\\Text' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings/Text.php',
        'FP_Core\\Group_Settings\\Settings_Form' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings_Form.php',
        'FP_Core\\Group_Settings\\Settings_Form_Registrar' => __DIR__ . '/../..' . '/includes/Group_Settings/Settings_Form_Registrar.php',
        'FP_Core\\InittableInterface' => __DIR__ . '/../..' . '/includes/InittableInterface.php',
        'FP_Core\\Initter' => __DIR__ . '/../..' . '/includes/Initter.php',
        'FP_Core\\Integrations\\Active_Campaign\\AcCore' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/AcCore.php',
        'FP_Core\\Integrations\\Active_Campaign\\ActiveCampaignIntegration' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/ActiveCampaignIntegration.php',
        'FP_Core\\Integrations\\Active_Campaign\\Contact' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Contact.php',
        'FP_Core\\Integrations\\Active_Campaign\\Cron_Contact_Update_Queue' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Cron_Contact_Update_Queue.php',
        'FP_Core\\Integrations\\Active_Campaign\\Cron_Contact_Updater' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Cron_Contact_Updater.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Field_Registrar' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Field_Registrar.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Custom_Field' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Custom_Field.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Group_Membership_Level' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Group_Membership_Level.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Group_Name' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Group_Name.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Individual_Membership_Level' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Individual_Membership_Level.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\MasterList' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/MasterList.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Membership_Access_Level' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Membership_Access_Level.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Membership_Cancellation_Date' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Membership_Cancellation_Date.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Membership_Expiration_Date' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Membership_Expiration_Date.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Membership_Start_Date' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Membership_Start_Date.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Membership_Status' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Membership_Status.php',
        'FP_Core\\Integrations\\Active_Campaign\\Custom_Fields\\Utilities' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Custom_Fields/Utilities.php',
        'FP_Core\\Integrations\\Active_Campaign\\Tags' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Tags.php',
        'FP_Core\\Integrations\\Active_Campaign\\Tracking_Pixel' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/Tracking_Pixel.php',
        'FP_Core\\Integrations\\Active_Campaign\\UpdateMember' => __DIR__ . '/../..' . '/includes/Integrations/Active_Campaign/UpdateMember.php',
        'FP_Core\\Integrations\\ProfitWell\\Controller' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/Controller.php',
        'FP_Core\\Integrations\\ProfitWell\\Logger' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/Logger.php',
        'FP_Core\\Integrations\\ProfitWell\\Migrator' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/Migrator.php',
        'FP_Core\\Integrations\\ProfitWell\\Plan_Creator' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/Plan_Creator.php',
        'FP_Core\\Integrations\\ProfitWell\\ProfitWell_API' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/ProfitWell_API.php',
        'FP_Core\\Integrations\\ProfitWell\\ProfitWell_Integration' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/ProfitWell_Integration.php',
        'FP_Core\\Integrations\\ProfitWell\\Subscription_Id_Meta_Manager' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/Subscription_Id_Meta_Manager.php',
        'FP_Core\\Integrations\\ProfitWell\\User_Id_Meta_Manager' => __DIR__ . '/../..' . '/includes/Integrations/ProfitWell/User_Id_Meta_Manager.php',
        'FP_Core\\InteractiveChecklistsNotification' => __DIR__ . '/../..' . '/includes/InteractiveChecklistsNotification.php',
        'FP_Core\\InteractiveLists\\Actions\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/Actions/Main.php',
        'FP_Core\\InteractiveLists\\Actions\\SendAbstract' => __DIR__ . '/../..' . '/includes/InteractiveLists/Actions/SendAbstract.php',
        'FP_Core\\InteractiveLists\\Actions\\SendFromClient' => __DIR__ . '/../..' . '/includes/InteractiveLists/Actions/SendFromClient.php',
        'FP_Core\\InteractiveLists\\Actions\\SendToCRM' => __DIR__ . '/../..' . '/includes/InteractiveLists/Actions/SendToCRM.php',
        'FP_Core\\InteractiveLists\\Cron\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/Cron/Main.php',
        'FP_Core\\InteractiveLists\\Cron\\ShareLink' => __DIR__ . '/../..' . '/includes/InteractiveLists/Cron/ShareLink.php',
        'FP_Core\\InteractiveLists\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/Main.php',
        'FP_Core\\InteractiveLists\\PostTypes\\Flowchart' => __DIR__ . '/../..' . '/includes/InteractiveLists/PostTypes/Flowchart.php',
        'FP_Core\\InteractiveLists\\PostTypes\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/PostTypes/Main.php',
        'FP_Core\\InteractiveLists\\Tables\\LinkShare' => __DIR__ . '/../..' . '/includes/InteractiveLists/Tables/LinkShare.php',
        'FP_Core\\InteractiveLists\\Tables\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/Tables/Main.php',
        'FP_Core\\InteractiveLists\\Templates\\Checklist\\Buttons' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/Checklist/Buttons.php',
        'FP_Core\\InteractiveLists\\Templates\\Checklist\\Header' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/Checklist/Header.php',
        'FP_Core\\InteractiveLists\\Templates\\Checklist\\Options' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/Checklist/Options.php',
        'FP_Core\\InteractiveLists\\Templates\\Checklist\\Questions' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/Checklist/Questions.php',
        'FP_Core\\InteractiveLists\\Templates\\Flowchart\\Enqueue' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/Flowchart/Enqueue.php',
        'FP_Core\\InteractiveLists\\Templates\\LoadWpTemplates' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/LoadWpTemplates.php',
        'FP_Core\\InteractiveLists\\Templates\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/Main.php',
        'FP_Core\\InteractiveLists\\Templates\\ResourceLinks\\Template' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/ResourceLinks/Template.php',
        'FP_Core\\InteractiveLists\\Templates\\ShareLink\\Ajax' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/ShareLink/Ajax.php',
        'FP_Core\\InteractiveLists\\Templates\\ShareLink\\Messages' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/ShareLink/Messages.php',
        'FP_Core\\InteractiveLists\\Templates\\ShareLink\\Template' => __DIR__ . '/../..' . '/includes/InteractiveLists/Templates/ShareLink/Template.php',
        'FP_Core\\InteractiveLists\\Utilities\\CRM' => __DIR__ . '/../..' . '/includes/InteractiveLists/Utilities/CRM.php',
        'FP_Core\\InteractiveLists\\Utilities\\Main' => __DIR__ . '/../..' . '/includes/InteractiveLists/Utilities/Main.php',
        'FP_Core\\InteractiveLists\\Utilities\\Page' => __DIR__ . '/../..' . '/includes/InteractiveLists/Utilities/Page.php',
        'FP_Core\\Level_Eligibility_Controller' => __DIR__ . '/../..' . '/includes/Level_Eligibility_Controller.php',
        'FP_Core\\LoginController' => __DIR__ . '/../..' . '/includes/LoginController.php',
        'FP_Core\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
        'FP_Core\\Member' => __DIR__ . '/../..' . '/includes/Member.php',
        'FP_Core\\MenuController' => __DIR__ . '/../..' . '/includes/MenuController.php',
        'FP_Core\\ProrationController' => __DIR__ . '/../..' . '/includes/ProrationController.php',
        'FP_Core\\RCP\\Discounts\\Main' => __DIR__ . '/../..' . '/includes/RCP/Discounts/Main.php',
        'FP_Core\\RCP\\Discounts\\MembershipDiscount' => __DIR__ . '/../..' . '/includes/RCP/Discounts/MembershipDiscount.php',
        'FP_Core\\RCP\\Main' => __DIR__ . '/../..' . '/includes/RCP/Main.php',
        'FP_Core\\RCP\\NewRegistration' => __DIR__ . '/../..' . '/includes/RCP/NewRegistration.php',
        'FP_Core\\RCP\\PartnershipRegistration' => __DIR__ . '/../..' . '/includes/RCP/PartnershipRegistration.php',
        'FP_Core\\RegistrationController' => __DIR__ . '/../..' . '/includes/RegistrationController.php',
        'FP_Core\\Reports\\GroupMembersReport' => __DIR__ . '/../..' . '/includes/Reports/GroupMembersReport.php',
        'FP_Core\\Shortcodes\\IsChecklist' => __DIR__ . '/../..' . '/includes/Shortcodes/IsChecklist.php',
        'FP_Core\\Shortcodes\\IsShareLink' => __DIR__ . '/../..' . '/includes/Shortcodes/IsShareLink.php',
        'FP_Core\\Shortcodes\\Main' => __DIR__ . '/../..' . '/includes/Shortcodes/Main.php',
        'FP_Core\\Users\\Main' => __DIR__ . '/../..' . '/includes/Users/Main.php',
        'FP_Core\\Users\\Transients' => __DIR__ . '/../..' . '/includes/Users/Transients.php',
        'FP_Core\\Users\\UsernameChange' => __DIR__ . '/../..' . '/includes/Users/UsernameChange.php',
        'FP_Core\\Utilities' => __DIR__ . '/../..' . '/includes/Utilities.php',
        'FP_Core\\Utilities\\ACF\\DiscountSelectPopulate' => __DIR__ . '/../..' . '/includes/Utilities/ACF/DiscountSelectPopulate.php',
        'FP_Core\\Utilities\\Checklist\\ChecklistNotification' => __DIR__ . '/../..' . '/includes/Utilities/Checklist/ChecklistNotification.php',
        'FP_Core\\Utilities\\Checklist\\Client' => __DIR__ . '/../..' . '/includes/Utilities/Checklist/Client.php',
        'FP_Core\\Utilities\\Checklist\\Page' => __DIR__ . '/../..' . '/includes/Utilities/Checklist/Page.php',
        'FP_Core\\Utilities\\Checklist\\ShareLink' => __DIR__ . '/../..' . '/includes/Utilities/Checklist/ShareLink.php',
        'FP_Core\\Utilities\\Crms\\SalesforceSubset' => __DIR__ . '/../..' . '/includes/Utilities/Crms/SalesforceSubset.php',
        'FP_Core\\Utilities\\Features\\Feature' => __DIR__ . '/../..' . '/includes/Utilities/Features/Feature.php',
        'FP_Core\\Utilities\\Formatting\\CustomTextTags' => __DIR__ . '/../..' . '/includes/Utilities/Formatting/CustomTextTags.php',
        'FP_Core\\Utilities\\Main' => __DIR__ . '/../..' . '/includes/Utilities/Main.php',
        'FP_Core\\Utilities\\Membership\\MembershipObjectId' => __DIR__ . '/../..' . '/includes/Utilities/Membership/MembershipObjectId.php',
        'FP_Core\\Utilities\\Membership\\MembershipPackageId' => __DIR__ . '/../..' . '/includes/Utilities/Membership/MembershipPackageId.php',
        'FP_Core\\Utilities\\Membership\\Memberships' => __DIR__ . '/../..' . '/includes/Utilities/Membership/Memberships.php',
        'FP_Core\\Utilities\\Register\\Discount' => __DIR__ . '/../..' . '/includes/Utilities/Register/Discount.php',
        'FP_Core\\Utilities\\Register\\DiscountCodeURL' => __DIR__ . '/../..' . '/includes/Utilities/Register/DiscountCodeURL.php',
        'FP_Core\\Utilities\\Sandbox' => __DIR__ . '/../..' . '/includes/Utilities/Sandbox.php',
        'GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'WordPress_SimpleSettings' => __DIR__ . '/..' . '/objectivco/wordpress-simple-settings/src/wordpress-simple-settings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9d0396006247d76d066c34d51e88f48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9d0396006247d76d066c34d51e88f48::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9d0396006247d76d066c34d51e88f48::$classMap;

        }, null, ClassLoader::class);
    }
}
