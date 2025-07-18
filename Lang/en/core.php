<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Operator Panel",
    "welcome"                   => "Welcome to SupportPal",
    "welcome_desc"              => "You've made a smart decision. Click start to begin a quick product tour of our settings and features.",

    // Dashboard
    "submit_ticket"             => "Submit Ticket",
    "submit_ticket_desc"        => "Use this form to submit a support ticket to our highly trained staff.",
    "track_ticket"              => "Track a Ticket",
    "track_ticket_desc"         => "Not Registered? Use your email address and ticket number to track the status of your ticket.",
    "my_tickets"                => "My Tickets",
    "my_tickets_desc"           => "Track your tickets. You can find both active and previously submitted tickets here.",
    "no_modules"                => "No modules are enabled.",
    "search_results"            => "Search Results",
    "found_results"             => "Found :total records for search term",

    // Maintenance
    "maintenance"               => "We're currently performing maintenance",
    "maintenance_desc"          => "Our help desk is temporarily unavailable as we carry out maintenance work. Thank you for your patience while we make these changes, we will be back soon.",
    "maintenance_active"        => "Maintenance mode is active.",

    // About
    "license_status"            => "License Status",
    "license_code"              => "License Code",
    "change_license"            => "Change License",
    "license_info"              => "License Information",
    "license_owner"             => "License Owner",
    "license_created"           => "License Created",
    "license_type"              => "License Type",
    "branding"                  => "Branding",
    "license_expires"           => "License Expires",
    "license_valid_ip"          => "License Valid IP(s)",
    "support_status"            => "Support Status",
    "support_expires"           => "Support Expires",
    "version_info"              => "Version Information",
    "installed_version"         => "Installed Version",
    "available_version"         => "Available Version",
    "monthly_product"           => "* Your expiration date will automatically adjust on a monthly basis once any outstanding invoices are paid.",

    // API Tokens
    "api_token"                 => "API Token|API Tokens",
    "token"                     => "Token",
    "regenerate_token"          => "Regenerate token",
    "access_level"              => "Access Level",
    "read_write"                => "Read & Write",
    "read_only"                 => "Read Only",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spam Rule|Spam Rules",
    "containing_text"           => "Containing Text",
    "filter_new_message"        => "New Ticket Message (from User)",
    "filter_new_comment"        => "New Self-Service Comment (from User)",
    "filter_user_login"         => "User Login",
    "filter_operator_login"     => "Operator Login",
    "filter_api_access"         => "API Access",
    "content"                   => "Content",
    "sender"                    => "Sender",
    "content_sender"            => "Content & Sender",

    // Company
    "company"                   => "Company|Companies",

    // Email
    "default_email_addr"        => "Default Email Address",
    "default_email_addr_desc"   => "The email that will be used in the sender field in most emails sent by the system.",
    "include_operator_name"     => "Include Operator Name",
    "include_operator_name_desc" => "Include the operators name in the email 'From' field for ticket reply emails. For example: From: Joe Bloggs (YourCompany Support)",
    "include_dept_name"         => "Include Department Name",
    "include_dept_name_desc"    => "Include the department name in the 'From' field of any ticket related emails. Note that this will typically create a new email thread if a given ticket changes departments.",
    "global_email_header"       => "Global Email Header",
    "global_email_header_desc"  => "Add a header to all emails sent out by the system. HTML is accepted.",
    "global_email_footer"       => "Global Email Footer",
    "global_email_footer_desc"  => "Add a footer to all emails sent out by the system. HTML is accepted.",
    "email_template"            => "Email Template|Email Templates",
    "email_log"                 => "Email Log",
    "email_queue"               => "Email Queue",
    "email_queue_desc"          => "Below are the emails that are queued to be sent out soon by the cron.",
    "email_method"              => "Email Method",
    "php_mail_function"         => "PHP mail() function",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP Host",
    "smtp_port"                 => "SMTP Port",
    "smtp_encryption"           => "SMTP Encryption",
    "smtp_requires_auth"        => "Requires Authentication",
    "smtp_username"             => "SMTP Username",
    "smtp_password"             => "SMTP Password",
    "ssl"                       => "SSL",
    "email_content"             => "Email Content",
    "email_content_desc"        => "Enter a default subject and email content for this template, you can also write the template in other languages. If a template is not set in another language, it will use the default data.",
    "outgoing"                  => "Outgoing",
    "incoming"                  => "Incoming",
    "incoming_spam"             => "Incoming (Rejected - Spam)",
    "incoming_throttled"        => "Incoming (Rejected - Throttled)",
    "email_subject"             => "Email Subject",
    "twig_html_warning"         => "Twig is not allowed inside HTML tags/attributes and will be automatically removed on save.",

    // Modules
    "modules"                   => "Module|Modules",
    "modules_desc"              => "Below is a list of all the available modules, click the edit icon to update the settings for that module.",
    "module_disable"            => "Disabled modules will be removed from the frontend and operator interface.",

    // Scheduled tasks
    "scheduled_task"            => "Scheduled Task|Scheduled Tasks",
    "interval_desc"             => "Set how often this task runs, for example setting 5 minutes will mean that the task runs every 5 minutes if the cron is active and running.",
    "cron_settings"             => "Cron Settings",
    "cron_running"              => "Running",
    "cron_not_running"          => "Not Running",
    "task_ran"                  => "Successfully ran scheduled task manually.",
    "task_failed"               => "Failed trying to run scheduled task manually.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "visit_plugin"              => "Visit Plugin Site",

    // Messages
    "last_activity"             => "Last Activity",
    "send_to"                   => "Send To",
    "inbox"                     => "Inbox",
    "compose"                   => "Compose",

    // Utilities
    "utilities"                 => "Utilities",

    // System Cleanup
    "system_cleanup"            => "System Cleanup",
    "system_cleanup_desc"       => "Use the available options to remove data that may no longer be needed or wanted.",
    "files"                     => "Files",
    "files_desc"                => "The following items are stored as files on the file system.",
    "logs"                      => "Logs",
    "logs_desc"                 => "The following items are stored as records in the database.",
    "empty"                     => "Empty",
    "prune"                     => "Prune",
    "total_records"             => "Total records",
    "system_cache"              => "System Cache",
    "system_cache_desc"         => "Used to store system data that doesn't change regularly to speed up the application.",
    "template_cache"            => "Template Cache",
    "template_cache_desc"       => "Pre-compiled versions of the template views are stored to improve loading times.",
    "attachments_desc"          => "Ticket attachments are stored on the file system but may take up room, you can prune attachment files before a certain date.",
    "system_activity_log_desc"  => "Stores all activity by users, operators and the system itself, you can prune records before a certain date.",
    "email_log_desc"            => "Stores all incoming and outgoing emails, you can prune records before a certain date.",
    "operator_login_log_desc"   => "Stores each time an operator logs in, you can prune records before a certain date.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Show Captcha",

    // Widgets
    "dashboard"                 => "Dashboard",
    "add_remove_widget"         => "Add / Remove Widgets",
    "enable_tour"               => "Enable Product Tour",

    // Product Tour
    "dashboard_desc"            => "Your own personal dashboard. Widgets can be removed, minimised and moved around!",
    "private_messages"          => "Private Messages",
    "messages_desc"             => "Private Messages serve as a useful way for 1:1 conversations with other help desk operators.",
    "configure"                 => "Configure Your Help Desk",
    "configure_desc"            => "SupportPal contains a number of settings enabling you to configure the help desk to your own preference.",
    "default_email"             => "Default Email Address",
    "default_email_desc"        => "The default email address to use for all outbound correspondence to users.",
    "dept_settings_desc"        => "We realise that departments within your organisation operate differently. Department settings enable you to override global settings.",
    "department_desc"           => "Departments are just like those within your organisation. Useful for ensuring customer enquiries get to the correct staff member(s) quickly.",
    "department_email"          => "Department Email Addresses",
    "dept_email_desc"           => "Multiple email addresses can be assigned to a given department. Email collection is performed against the configured addresses to pull emails from your customers into the help desk.",
    "dept_tmpl"                 => "Department Email Templates",
    "dept_tmpl_desc"            => "Sometimes you may wish to change, or completely disable, department email templates. You can define department specific email templates and enable them here.",
    "schedule_task_desc"        => "Scheduled Tasks are used to automate various processes within SupportPal, including email-based ticket collection.",
    "schedule_task_2"           => "Scheduled Tasks require a cron job to be created in order to operate. The interval for each task performed by the cron job can be adjusted via the edit form.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Create a cron job similar to the example provided below on your server for the scheduled tasks to run automatically.",
    "ticket_channel_desc"       => "Ticket Channels are methods for creating tickets. They can be easily extended to include your own channels, for example tickets opened via Instagram.",
    "user_desc"                 => "Users who interact with your system are displayed here. You can add, edit, and delete users as appropriate.",
    "organisation_desc"         => "Users can be assigned to organisations enabling them access to tickets opened by other users within their organisation.",
    "operator_desc"             => "Other members of staff can be added as operators here, along with managing which departments they are assigned to.",
    "ticket_desc"               => "The ticket grid contains a collection of all tickets relevant to you.",
    "ticket_toolbar"            => "Tool Bar",
    "ticket_desc3"              => "Bulk actions can be performed on tickets using the ticket tool bar.",
    "tour_complete"             => "Tour Complete!",
    "tour_complete_desc"        => "Thank you for using SupportPal.<br /><br />We now recommend that you follow the getting started guide below to configure your help desk.",

    // IP Ban
    "ip_ban_time_desc"          => "If the ban is permanent or temporary.",
    "expiry"                    => "Expiry",
    "expired"                   => "Expired",
    "expiry_time"               => "Expiry Time",
    "expiry_time_desc"          => "The time when the ban will expire, if a date is not set or in the past, it will automatically set to 24 hours from now.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Failed trying to update the :item. At least one language must be enabled at all times.",

    // General Settings
    "locale"                    => "Locale",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Admin Folder",
    "admin_folder_desc"         => "Set the folder name for the operator panel. It is recommended to change from the default \"admin\" name from a security point of view.",
    "enable_ssl"                => "Enable SSL",
    "maintenance_mode"          => "Maintenance Mode",
    "maintenance_mode_desc"     => "Disables the public help desk functionality and shows a maintenance notice. Edit resources/templates/frontend/[template]/core/maintenance.twig to change the message that is shown to users.",
    "default_user_country"      => "Default User Country",
    "default_user_country_desc" => "The country that will be selected by default when users are registering.",
    "system_timezone"           => "System Timezone",
    "system_timezone_desc"      => "The default timezone that is applied throughout the system. Operators can change their timezone in their personal settings.",
    "date_format"               => "Date Format",
    "date_format_desc"          => "The date format that is used globally.",
    "time_format"               => "Time Format",
    "time_format_desc"          => "The time format that is used globally.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "The key for our single sign on option, minimum 16 characters.",
    "simpleauth_operators"      => "Allow for Operators",
    "base_url"                  => "System URL",
    "base_url_desc"             => "Enter the full web address of your installation, used to generate the URLs that are sent to users.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debug Mode",
    "pretty_urls"               => "Pretty URLs",
    "pretty_urls_desc"          => "Enabling will remove index.php from URLs, only enable if you are able to access the operator panel without index.php. Disable if you do not have mod_rewrite installed, .htaccess files are not allowed or haven't converted the Apache .htaccess rewrite rules to work with your alternative web server.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Enabling this will force the whole frontend and operator area to use secure connections, a recommended setting. Please ensure HTTPS functions correctly on your server before enabling.",
    "unexpected_template_error" => "An unexpected error occurred while syntax checking the template. Please try again.",
    "empty_template_preview"    => "Please provide a valid template in order to use the preview function.",
    "no_department_address"     => "Failed to find a department address in the recipient list.",
    "email_loop_detected"       => "Loop detected - email sent from a department address.",
    "email_ticket_locked"       => "Ticket locked. User has been asked to open a new ticket via email.",
    "email_no_body"             => "Failed to identify the email message body.",
    "email_runtime_error"       => "A runtime error occurred while creating the ticket/reply.",
    "email_reply_disabled"      => "User email replies have been disabled for this department.",
    "email_throttled"           => "Too many incoming emails from user. The limit is :max_requests emails every :decay_time minutes.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Edit the settings that apply to all of SupportPal. If you wish to edit settings for a specific section, e.g. Tickets, open the section in the sidebar to view available settings for that module. Settings related to your brand(s) can be found by clicking Brands in the sidebar.",
    "brand"                     => "Brand|Brands",
    "brand_desc"                => "A brand is your customer-facing identity within SupportPal, allowing several channels of communication. Several brands can be operated seamlessly under a single, unified operator panel.",
    "default_brand"             => "Default Brand",
    "default_brand_desc"        => "Select the brand that will be used by default when visitors visit the frontend and a matching brand cannot be found.",
    "brand_enabled_desc"        => "Toggle to enable or disable the brand. Disabled brands cannot be utilised and won't count as part of the brands allowed on your license, disabling can be used to temporarily hide a brand and/or retain information. Deleting a brand will remove all information including users and tickets that are related to it.",
    "inherit_global_setting"    => "Inherit Global Setting",
    "brand_date_format_desc"    => "The date format used for this brand's frontend.",
    "brand_time_format_desc"    => "The time format used for this brand's frontend.",
    "brand_timezone"            => "Brand Timezone",
    "brand_timezone_desc"       => "The timezone that is used by default on this brand's frontend, users will have the option to select their own timezone.",
    "brand_default_lang_desc"   => "The language that is used by default on this brand's frontend.",
    "brand_lang_toggle_desc"    => "If the language dropdown should show on this brand's frontend.",
    "brand_groups_desc"         => "Operators in the selected groups will be able to create, update and delete (depending on role permissions) tickets and other content in this brand.",
    "select_brand"              => "Select a brand...",
    "add_another_language"      => "Add another language...",
    "mass_email_brand_desc"     => "Please select which brand the email will be sent from. It will be used to set the sending from name and address, load the correct email template and in the merge fields. If you send to a user group, only users who belong to the selected brand will be emailed.",
    "brand_limit_exceeded"      => "Your license is only permitted to use :allowed brand(s) simultaneously. To purchase additional brands please visit our client area.",
    "additional_brands"         => "Additional Brands",
    "purchase_more"             => "Purchase more",
    "brand_limit_allowed"       => "Your license is currently permitted to use :allowed brand simultaneously.|Your license is currently permitted to use :allowed brands simultaneously.",
    "brand_limit_purchase"      => "If this is incorrect, please <strong>reissue</strong> your license at our <a href='http://www.supportpal.com/manage/' target='_blank'>client area</a> and visit the <a href=':route'>License Information</a> page to synchronise your help desk with our license server.<br />To purchase additional brands, please <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgrade your license</a>.",
    "support_expiry"            => "Your support and updates subscription is valid until :date.",
    "support_status_desc"       => "Please <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew your support subscription</a> in order to get the latest support and updates from SupportPal.",
    "ip_ban"                    => "IP Ban|IP Bans",
    "ip_whitelist"              => "IP Whitelist",
    "whitelisted_ip"            => "Whitelisted IP",
    "license_path"              => "Installation Path",
    "php_info"                  => "PHP Information",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "Department is not assigned to ticket brand.",
    "incoming_rejected"         => "Incoming (Rejected)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Log File Manager",
    "file_manager_desc"         => "Below you can download or delete the logs that are stored by the system during operation, they can be used for debugging purposes. The log files are automatically cycled, storing only up to the latest 5 days of entries.",
    "app_logs"                  => "Application Logs",
    "app_logs_desc"             => "All warnings and errors from general usage of the help desk are logged here. You may be asked to provide one or more of these logs when requesting support.",
    "email_logs"                => "Email Logs",
    "email_logs_desc"           => "Details about incoming emails are stored in these files when they are being parsed and imported as tickets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Reply To",
    "and_number_others"         => "and :number other|and :number others",
    "user_templates"            => "User Templates",
    "operator_templates"        => "Operator Templates",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Cumulative Attachment Size Limit",
    "attachment_size_desc"      => "The maximum cumulative size of all attachments that are sent in a single email. Available options are K (for Kilobytes) and M (for Megabytes), anything else assumes bytes. Example value: 5M for 5 Megabytes. Set to 0 to not send any attachments by email and require users to download attachments via the help desk.",
    "attachment_limit_reached"  => "Cumulative file limit reached (:size). Please consider sending files via another medium (such as a download URL).",
    "no_existing_translations"  => "No existing translations.",
    "add_translation"           => "Add Translation",
    "todo_list"                 => "To Do List",
    "version_check"             => "Version Check",
    "system_overview"           => "System Overview",
    "getting_started"           => "Getting Started",
    "operator_notes"            => "Operator Notes",
    "simpleauth_operators_desc" => "Allow operators to log in and out with SimpleAuth, we recommend to keep this disabled unless you are specifically using it for this purpose.",
    "upgrade_and_reactivate"    => "Upgrade & Reactivate",
    "upgrade_pending"           => "Upgrade Pending",
    "locale_in_uri"             => "Include Locale in URI",
    "locale_in_uri_desc"        => "Disable to remove the locale from the URI, for example: http://support.mycompany.com/en/announcements becomes http://support.mycompany.com/announcements. Can only be disabled when there's one enabled language in the system.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "This is currently set as a default language. Disabling the language will set another enabled language as the default language instead.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Please enable JavaScript in order to use this page.",
    "go_to_dashboard"           => "Go to dashboard",
    "brand_colour_desc"         => "Select a colour for your brand, it will be used for the colour scheme on both the frontend and operator template. Leave blank to use the default colour scheme.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "The favicon image appears in the address bar and is used to identify your website. For the best results, ensure the icon contains a range of sizes from 32x32px to 310x310px, is square and ICO/PNG format.",
    "view_original"             => "View Original",
    "download_original"         => "Download Original",
    "consume_all"               => "Optionally enter a department email address  with \"Consume All\" enabled.",
    "reprocess_email"           => "Reprocess Email",
    "reprocess_email_desc"      => "We recommend to review what originally blocked the email and make any necessary changes before attempting to reprocess.",
    "email_blocked_desc"        => "The email failed to send several times, it must now be manually sent.",
    "captcha_type"              => "Captcha Type",
    "default_captcha"           => "Default Captcha",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Please register a new site at <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, select the correct type of reCAPTCHA and ensure to add each brand domain. Copy the site and secret key above.",
    "enter_code"                => "Enter code",
    "export_data"               => "Export Data",
    "export_data_desc"          => "Generate a downloadable export of data belonging to this user.",
    "export_data_select"        => "Please select what data you would like to export.",
    "export_data_scheduled"     => "The export is currently being generated, this may take some time. We will e-mail you when it's available to download.",
    "database"                  => "Database",
    "database_desc"             => "The following items are stored in the database.",
    "prune_users"               => "Inactive user records can be automatically pruned. A user is considered inactive if they have not logged in or have any other activity for a given amount of time.",
    "prune_tickets"             => "Inactive tickets can be automatically pruned. A ticket is considered inactive if it is resolved and has not had any activity for a given amount of time.",
    "prune_organisations"       => "Inactive organisations can be automatically pruned. An organisation is considered inactive if it has no users linked with it and has not had any activity for a given amount of time.",
    "prune_export"              => "User data exports are stored on the file system but may take up room, you can prune export files generated before a certain date.",
    "automatically_prune"       => "Automatically delete",
    "days_after_saved"          => "Records after",
    "days_after_last_activity"  => "Inactive records after",
    "record_permanent_delete"   => "The records will be permanently deleted. This will impact reports.",
    "record_delete_relations"   => "The records will be permanently deleted along with the following related data: :relations. This will impact reports.",
    "manually_prune"            => "Manually delete records created before",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "If you enable this setting when the page doesn't load correctly, you may be locked out of SupportPal!",
    "verify_frontend_loads"     => "Please verify that the frontend loads correctly below.",
    "twig_operator_reply_template"   => "The {{ operator.reply_template|raw }} merge field will be processed at runtime hence the preview may be incorrect.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Allows running other brands on your SupportPal installation.",
    "no_branding"               => "No Branding",
    "no_branding_desc"          => "Removes SupportPal branding from the client-facing end of the help desk.",
    "multi_ip"                  => "Multi-IP Support",
    "multi_ip_desc"             => "Allows locking SupportPal to more than one internal/external IP.",
    "purchase"                  => "Purchase",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Enable debug mode to display errors, only use for debugging or if instructed by support. Errors and other useful logging messages are otherwise stored in the application logs, which can be downloaded by going to Utilities -> Logs -> Log File Manager.",
    "record_trash_relations"    => "The records will be moved to the trash and then permanently deleted after :number days along with the following related data: :relations. This will impact reports.",
    "uninstall_plugable_warning" => "Uninstalling the :plugable will delete all associated files and data. We recommend to deactivate the :plugable instead.",
    "web_settings_desc"         => "The web channel settings apply to the frontend. By default tickets can be accessed by anyone who knows a unique ticket URL. You may wish to disable this and require users to login before they can access ticket information.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Please enter a string (particular word to ban or email address), all strings are case-insensitive.",
    "spam_is_regex_desc"        => "Rules can take advantage of regular expressions; if you intend to do so please enable this setting. You do not need to include delimiters.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "The file(s) could not uploaded due to a server-side error.",
    "insert_image"              => "Insert Image",
    "quote"                     => "Quote",
    "code"                      => "Code",
    "format"                    => "Format",
    "paragraph"                 => "Paragraph",
    "heading1"                  => "Heading 1",
    "heading2"                  => "Heading 2",
    "heading3"                  => "Heading 3",
    "heading4"                  => "Heading 4",
    "heading5"                  => "Heading 5",
    "heading6"                  => "Heading 6",
    "upload"                    => "Upload",
    "more_formatting"           => "More Formatting",
    "clearformat"               => "Clear Formatting",
    "bold"                      => "Bold",
    "underline"                 => "Underline",
    "italic"                    => "Italic",
    "strikethrough"             => "Strikethrough",
    "font_color"                => "Font Colour",
    "insert_link"               => "Insert Link",
    "edit_link"                 => "Edit Link",
    "unlink"                    => "Unlink",
    "orderedlist"               => "Ordered List",
    "unorderedlist"             => "Unordered List",
    "outdent"                   => "Outdent",
    "indent"                    => "Indent",
    "lists"                     => "Lists",
    "edit_html"                 => "Edit HTML",
    "sEmptyTable"               => "No data available in table",
    "sInfo"                     => "Showing _START_ to _END_ of _TOTAL_ entries",
    "sInfoEmpty"                => "Showing 0 to 0 of 0 entries",
    "sInfoFiltered"             => "(filtered from _MAX_ total entries)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Show _MENU_ entries",
    "sLoadingRecords"           => "Loading...",
    "sProcessing"               => "Processing...",
    "sSearchPlaceholder"        => "Search...",
    "sZeroRecords"              => "No matching records found",
    "sSortAscending"            => ": activate to sort column ascending",
    "sSortDescending"           => ": activate to sort column descending",
    "incoming_auto_reply"       => "Incoming (Auto-Reply)",
    "logo_dark_mode"            => "Dark Mode Logo",
    "logo_dark_mode_desc"       => "If your logo was designed to only work on a light background, set a different logo for dark mode. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "template_mode"             => "Template Mode",
    "template_mode_desc"        => "Set a default light or dark theme for the interface. Users will be able to select their own preference in their profile.",
    "light_mode"                => "Light Mode",
    "dark_mode"                 => "Dark Mode",
    "logo"                      => "Logo",
    "logo_desc"                 => "Change the default logo for this brand. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "website_url"               => "Website URL",
    "website_url_desc"          => "Add a link back to your main website in the support portal header.",
    "back_to_website"           => "Back to website",
    "template"                  => "Template",
    "how_can_we_help"           => "How can we help you today?",
    "ticket_desc2"              => "The ticket grid can be ordered adjusted to your preference and filtered as needed.",
    "zip_extension_required"    => "The Zip PHP extension is not installed. Please install it and try again.",
    "zip_file_not_downloaded"   => "The zip file could not download. Verify that you are able to access: :url",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Third-Party Integration|Third-Party Integrations",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Please create authentication credentials via the <a href=\":route\">Third-Party Integration</a> page.",
    "oauth_data_missing"        => "The client ID and/or secret haven't been set and are required. Once you have set it up as per the below instructions, close the pop-up and re-validate.",
    "configure_after_brand_created" => "This may be configured after the brand has been created.",
    "get_access_token"          => "Get Access Token",
    "reset_access_token"        => "Reset Access Token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Brand Name",
    "brand_name_desc"           => "Your brand name is used for all correspondence with users.",
    "supportpal_announcements"  => "SupportPal Announcements",
    "add_selectize"             => "Add <strong>:item</strong>...",
    "general_settings"          => "Configure general settings",
    "configure_brand"           => "Configure brand",
    "configure_department"      => "Configure department",
    "setup_cron"                => "Set-up cron job",
    "channel_settings"          => "Update ticket channel settings",
    "add_user"                  => "Add a new user",
    "open_ticket"               => "Open a new ticket",
    "reply_ticket"              => "Reply to ticket",
    "new_version_available"     => "New Version Available",
    "new_version_desc"          => "A new version of SupportPal has been released, we always recommend to keep your installation up to date.<div class='description'>Acknowledging this notice will hide it until a newer version is released.</div>",
    "acknowledge"               => "Acknowledge",
    "running_latest_version"    => "You are running the latest version.",
    "running_prerelease"        => "You are running a prerelease version.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Results Per Page",
    "class_name"                => "Class Name",
    "possible_permission_issue" => "You are running the command as \":cli_user\", while \":path\" is owned by \":path_user\", this can lead to file permission issues.",
    "system_update"             => "System Update",
    "system_update_desc"        => "Update SupportPal to the latest version available.",
    "update_available"          => "Update Available",
    "up_to_date"                => "Up to Date",
    "release_notes"             => "Release Notes",
    "about_to_update_to"        => "You are about to update to version <strong>:version</strong>. A full system backup will be taken automatically prior to the update.",
    "waiting_for_update_start"  => "Waiting for the update to start... This may take a few minutes.",
    "binary_paths"              => "Binary Paths",
    "binary_paths_desc"         => "The PATH environment variable is used to find required binaries. If one or more binary cannot be found, you can specify the full path for each binary file.",
    "cron_makesure"             => "For assistance registering the cron job, please see <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Cron Job Help</a>.",
    "cron_must_run_for_update"  => "The cron job must be running to use this function.",
    "support_expired"           => "The support and updates on your license have expired.",
    "update_permitted_version"  => "The license only permits updating to :version.",
    "update_renew_support"      => "To update to the latest version of SupportPal, please renew your support and updates.",
    "renew"                     => "Renew",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Background Jobs",
    "background_jobs_not_processing" => "Background jobs are not currently being processed, view <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>troubleshooting steps</a>.",

    /*
     * 4.0.0
     */
    "addon"                     => "Add-on|Add-ons",
    "addon_already_exists"      => "An add-on already exists at this path: :path",
    "addons_marketplace"        => "Marketplace",
    "addons_missing_valid_artifact" => "Add-on does not have a valid archive.",
    "checksum_not_matched"      => "The downloaded file failed checksum verification.",
    "invalid_archive_format"    => "Artifact should not include other directories other than the add-on.",
    "downloading_version"       => "Downloading add-on version :version to :path...",
    "extracting_addon"          => "Extracting add-on files...",
    "activating_addon"          => "Activating add-on...",
    "addon_install_success"     => "Add-on installed successfully.",
    "addon_install_error"       => "Add-on failed to install, please check the application logs for more details.",
    "addon_latest_version"      => "Add-on is already running the latest version.",
    "addon_update_success"      => "Add-on updated successfully.",
    "addon_update_error"        => "Add-on failed to update and has been reverted, please check the application logs for more details.",
    "addon_basic_info"          => "Please provide some basic information about the add-on.",
    "addon_author_name"         => "Author name",
    "addon_author_uri"          => "Author URI (link to your website)",
    "addon_author_uri_short"    => "Author URI",
    "addon_vendor_name"         => "Vendor name (name of your company, can be same as author name)",
    "addon_vendor_name_short"   => "Vendor Name",
    "addon_name"                => "Add-on name",
    "addon_description"         => "Add-on description",
    "addon_creating"            => "Creating add-on...",
    "addon_ready"               => "Add-on ready in :directory! Build something amazing.",
    "addon_version_not_supported" => "The available version of the add-on does not support the installed SupportPal version.",
    "no_addons_found"           => "No add-ons found.",
    "price"                     => "Price",
    "one_time"                  => "One Time",
    "monthly"                   => "Monthly",
    "quarterly"                 => "Quarterly",
    "semiannually"              => "Semi-Annually",
    "annually"                  => "Annually",
    "biennially"                => "Biennially",
    "triennially"               => "Triennially",
    "tag"                       => "Tag|Tags",
    "login_to_install"          => "<a href=':link'>Login</a> to Install",
    "marketplace_login_error"   => "Login failed. Please <a target='_blank' href='https://www.supportpal.com/manage/logout.php'>logout</a> and then ensure to log in to the account that has your SupportPal license.",
    "payment_required"          => "Payment Required",
    "addon_purchase_info"       => "By clicking the above button, your account will be charged the price shown at the selected billing cycle, and you agree to our <a href=':link' target='_blank'>terms of service</a>.",
    "addon_cancel_info"         => "Cancelling will immediately deactivate the add-on and stop any further payments being taken.",
    "system_health"             => "System Health",
    "system_health_desc"        => "Health checks monitor that the system is performing correctly and notify you when issues arise.",
    "system_health_errors"      => "One or more <a href=':link'>system health</a> checks are failing.",
    "app_log_check"             => "Application Log Error Count",
    "app_log_errors_exist"      => "Application log file for today contains errors, please check the logs by navigating to Utilities -> Logs -> Log File Manager -> :filename",
    "redis_check"               => "Redis Connection",
    "web_server_check"          => "Web Server",
    "web_server_error"          => "Unable to connect to :url",
    "redirection_rules_check"   => "Redirection Rules",
    "redirection_rule_error"    => "Server redirection rules must remove /index.php from path. Otherwise attackers can potentially access your files.",
    "cron_check"                => "Cron",
    "cron_check_error"          => "The cron is not running.",
    "cron_check_warning"        => "The following tasks: (:tasks) has not been ran within their expected interval.",
    "database_check"            => "Database Connection",
    "disk_usage_check"          => "Free Disk Space",
    "email_queue_check"         => "Outbound Email Queue",
    "email_queue_warning"       => "Email queue contains :number emails that require manual attention.",
    "pipe_check"                => "Email Piping",
    "file_not_found"            => "File ':path' not found.",
    "file_not_executable"       => "File ':path' is not executable.",
    "dependency_resolution"     => "Unable to run health check.",
    "debug_mode_warning"        => "Debug mode should only be used temporarily.",
    "custom_colour"             => "Custom Colour",
    "remove_colour"             => "Remove Colour",
    "background_colour"         => "Background Colour",
    "open_link"                 => "Open link",
    "open_link_in"              => "Open link in...",
    "new_window"                => "New window",
    "current_window"            => "Current window",
    "edit_image"                => "Edit image...",
    "alternative_description"   => "Alternative description",
    "browse_image"              => "Browse for an image",
    "drop_image"                => "Drop an image here",

    /*
     * 4.2.0
     */
    "keyboard_shortcuts"        => "Keyboard Shortcuts",
    "enable_keyboard_shortcuts" => "Enable keyboard shortcuts",
    "shortcut_global"           => "Global shortcuts",
    "shortcut_toggle"           => "Toggle the keyboard shortcuts dialog",
    "shortcut_start_search"     => "Start search",
    "shortcut_goto_new_ticket"  => "Go to the open new ticket page",
    "shortcut_ticket_view"      => "Ticket view shortcuts",
    "shortcut_focus_reply"      => "Focus the reply form",
    "shortcut_focus_notes"      => "Focus the notes form",
    "shortcut_focus_forward"    => "Focus the forward form",
    "shortcut_toggle_user_tab"  => "Toggle the user details tab in the sidebar",
    "shortcut_take_ticket"      => "Take ticket",
    "shortcut_close_ticket"     => "Close ticket",
    "shortcut_lock_ticket"      => "Close & lock ticket",
    "shortcut_unlock_ticket"    => "Unlock ticket",
    "shortcut_trash_ticket"     => "Move ticket to trash",
    "shortcut_block_user"       => "Block user and move ticket to trash",
    "shortcut_watch_ticket"     => "Watch ticket",
    "shortcut_unwatch_ticket"   => "Unwatch ticket",
    "shortcut_merge_ticket"     => "Merge ticket",
    "shortcut_unmerge_ticket"   => "Unmerge ticket",
    "shortcut_expand_all"       => "Expand all messages",
    "shortcut_collapse_all"     => "Collapse all messages",
    "shortcut_print_ticket"     => "Print ticket details and messages",

    /*
     * 4.3.0
     */
    "db_connection_error"       => "Database connection error, please check :path",

    /*
     * 5.0.0
     */
    "favicon_dark_mode"         => "Dark Mode Favicon",
    "favicon_dark_mode_desc"    => "If your favicon was designed to only work on a light background, set a different favicon for dark mode. This will only be used if your browser and/or operating system is running in dark mode.",
    "template_mode_system_desc" => "Choosing system will synchronise the template mode to light or dark mode depending on your operating system theme settings.",

    /*
     * 5.0.1
     */
    "starttls_or_none"          => "STARTTLS / None",

    /*
     * 5.1.0
     */
    "email_attempt_at_desc"     => "The email failed to send. Retrying again :time.", // :time example, "in 5 mins"
    "websockets_connection"     => "Web Sockets Connection",
    "websockets_not_running"    => "Unable to connect to web socket server.",
    "search_driver_check"       => "Search Driver",
    "search_driver_not_working" => "The configured search driver is not working correctly.",

    /*
     * 5.2.0
     */
    "temporary_path"            => "Temporary Path",
    "temporary_path_desc"       => "The temporary path is used to store files during the update. The system temporary path is used by default. The path must have at least 3GB of free space.",
    "background_jobs_desc"      => "Below are a list of background jobs that have failed recently.",
    "failed_jobs"               => "Failed Jobs",
    "horizon_dashboard"         => "Horizon Dashboard",
    "job"                       => "Job|Jobs",
    "job_payload"               => "Job Payload",
    "job_exception"             => "Job Exception",
    "failed_at"                 => "Failed At",
    "queue"                     => "Queue",
    "exception"                 => "Exception",
    "data"                      => "Data",
    "failed_background_jobs"    => "One or more <a target='_blank' href=':link'>background jobs</a> have failed and require manual attention.",

    /*
     * 5.3.0
     */
    "incoming_duplicate"        => "Incoming (Duplicate)",

    /*
     * 5.4.0
     */
    "email_method_overridden"   => "The email method has been overridden in the <a href=':link' target='_blank'>default brand settings</a>.",
    "addon_not_found"           => "Add-on not found.",
    "deactivating_addon"        => "Deactivating add-on...",
    "addon_already_activated"   => "Add-on already activated.",
    "addon_already_deactivated" => "Add-on already deactivated.",
    "addon_cannot_deactivate"   => "Add-on cannot be deactivated.",
    "addon_activation_failed"   => "Add-on activation failed, check the application log for more information.",
    "addon_deactivation_failed" => "Add-on deactivation failed, check the application log for more information.",
    "site_key"                  => "Site Key",
    "secret_key"                => "Secret Key",
    "turnstile_desc"            => "Please register a new Turnstile widget at <a target='_blank' href=\"https://developers.cloudflare.com/turnstile/get-started/\">Cloudflare</a>. Copy the site and secret key above.",
    "hcaptcha_desc"             => "Please register at <a target='_blank' href=\"https://hcaptcha.com/\">hCaptcha</a>. Copy the site and secret key above.",
    "captcha_type_desc"         => "Select the Captcha to be used throughout the system.",

    /*
     * 5.5.0
     */
    "ticket_channel_2"          => "We provide a number of default ticket channels. Additional channels and other add-ons can be installed from the Add-ons Marketplace.",
    "selected_country_aria_label" => "Selected country",
    "no_country_selected"       => "No country selected",
    "country_list_aria_label"   => "List of countries",
    "zero_search_results"       => "No results found",
    "one_search_result"         => "1 result found",
    "multiple_search_results"   => "\${count} results found", // ${count} is a JS variable and should not be changed.
    "advanced"                  => "Advanced",
    "table"                     => "Table",
    "cell"                      => "Cell",
    "cell_properties"           => "Cell properties",
    "merge_cells"               => "Merge cells",
    "split_cell"                => "Split cell",
    "row"                       => "Row",
    "inset_row_before"          => "Insert row before",
    "inset_row_after"           => "Insert row after",
    "delete_row"                => "Delete row",
    "row_properties"            => "Row properties",
    "cut_row"                   => "Cut row",
    "copy_row"                  => "Copy row",
    "paste_row_before"          => "Paste row before",
    "paste_row_after"           => "Paste row after",
    "column"                    => "Column",
    "insert_column_before"      => "Insert column before",
    "insert_column_after"       => "Insert column after",
    "delete_column"             => "Delete column",
    "cut_column"                => "Cut column",
    "copy_column"               => "Copy column",
    "paste_column_before"       => "Paste column before",
    "paste_column_after"        => "Paste column after",
    "table_properties"          => "Table properties",
    "delete_table"              => "Delete table",
    "width"                     => "Width",
    "height"                    => "Height",
    "cell_spacing"              => "Cell spacing",
    "cell_padding"              => "Cell padding",
    "border_width"              => "Border width",
    "caption"                   => "Caption",
    "show_caption"              => "Show caption",
    "alignment"                 => "Alignment",
    "border_style"              => "Border style",
    "border_colour"             => "Border colour",
    "cell_type"                 => "Cell type",
    "scope"                     => "Scope",
    "horizontal_align"          => "Horizontal align",
    "vertical_align"            => "Vertical align",
    "header_cell"               => "Header cell",
    "row_group"                 => "Row group",
    "column_group"              => "Column group",
    "left"                      => "Left",
    "center"                    => "Center",
    "right"                     => "Right",
    "top"                       => "Top",
    "middle"                    => "Middle",
    "bottom"                    => "Bottom",
    "anchor"                    => "Anchor",
    "example"                   => "Example",

    /*
     * 5.6.0
     */
    "email_template_enabled_desc" => "Disabling the email template will prevent notifications that use this template from being sent.",
    "template_disabled"         => "Template Disabled",
    "reset_email_template"      => "This will update the editor with the default email template content. Any previous changes made will be lost once the email template has been saved.",

    /*
     * 5.7.0
     */
    "cursor_position"           => "Cursor Position",
    "set_cursor_position"       => "Set Cursor Position",
    "private_message_notification" => "New Operator Private Message",
    "private_message_notification_desc" => "Notifies you when you receive correspondence from another operator via private message.",

    /*
     * 5.7.3
     */
    "solid"                     => "Solid",
    "dashed"                    => "Dashed",
    "dotted"                    => "Dotted",
);
