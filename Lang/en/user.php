<?php

return array(

    "user"                          => "User|Users",
    "user_details"                  => "User Details",
    "add_user"                      => "Add User",
    "account_active"                => "Account Active",
    "account_active_desc"           => "Toggle to enable and disable access to authenticated sections.",

    "op_settings_dept_desc"         => "Select which departments the operator can view and reply to tickets in.",

    "organisation"                  => "Organisation|Organisations",
    "members"                       => "Member|Members",
    "owner"                         => "Owner",
    "manager"                       => "Manager",
    "access_level"                  => "Access Level",
    "access_level_desc"             => "Define the access level for the user in the organisation, based on the following information:<br /><strong>Manager</strong> - Can view tickets opened by all users in the organisation and manage users in the organisation<br /><strong>User</strong> - Can view tickets only opened by self",
    "manage_organisation"           => "Manage Organisation",
    "leave_organisation"            => "Leave Organisation",
    "user_membership"               => "User membership",
    "transfer_ownership"            => "Transfer ownership",
    "transfer_ownership_desc"       => "As the current owner of the organisation, you cannot be removed as a manager and only you can delete the organisation. You may transfer the ownership of the organisation to someone else, be aware that this action cannot be reversed.",
    "transfer_ownership_operator"   => "Only the owner can delete the organisation and cannot be removed from it. Use this option to change the ownership to another user in the organisation.",
    "start_typing_name"             => "Start typing a name...",
    "organisation_desc"             => "Each organisation can have <strong>managers</strong>, who can manage users and read and reply to other's tickets, and <strong>users</strong>, who can open tickets, but can't read or reply to other's tickets.",
    "organisation_operator_desc"    => "Add existing users to this organisation by clicking \"Add User\" and searching for their name, note that adding a user will remove any links they have with another organisation.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Can manage other users and view &amp; reply to other user's tickets.<br /><strong>User</strong> - Can only open tickets on behalf of organisation and reply to own tickets.",
    "send_password_reset"           => "Send Password Reset Link",

    "profile"                       => "Profile",

    "login"                         => "Login",
    "remember_me"                   => "Remember me",
    "logout"                        => "Logout",
    "return_to_login"               => "Return to Login",

    "user_register_disabled"        => "Sorry, public user registration is currently disabled.",
    "success_register"              => "Account successfully registered!",
    "register_now"                  => "Register now",
    "register"                      => "Register",
    "register_account"              => "Register Account",
    "signed_up"                     => "Signed up",
    "last_active"                   => "Last active",

    "forgot_password"               => "Forgot password?",
    "reset_password"                => "Reset Password",
    "set_password"                  => "Set a password",
    "please_set_password"           => "Please set your new password below.",
    "missing_email_or_reset"        => "Missing email address or reset token.",

    "firstname"                     => "First Name",
    "lastname"                      => "Last Name",
    "formatted_name"                => "Formatted Name",
    "country"                       => "Country",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Confirm Password",

    "group"                         => "User Group|User Groups",
    "group_members"                 => "Group Members",
    "operator_group"                => "Operator Group|Operator Groups",
    "add_group"                     => "Add to Group",

    "customfield"                   => "User Custom Field|User Custom Fields",
    "customfield_order"             => "Drag the rows to change the order custom fields appear to users.",

    "role"                          => "Role|Roles",

    "operator_login_log"            => "Operator Login Log",
    "system_activity_log"           => "System Activity Log",
    "activity_log"                  => "Activity Log",

    "mass_email"                    => "Send Mass Email",
    "send_email"                    => "Send Email",
    "choose_template"               => "Choose template...",

    "ldap_account"                  => "LDAP Account|LDAP Accounts",
    "ldap_operator_desc"            => "Search for an existing operator, or create a new one.",
    "ldap_server"                   => "LDAP Server",
    "ldap_server_desc"              => "The server hostname. Alternatively, you can specify the full LDAP URI. For example: ldaps://ldap.server:1234/ will connect via SSL to the port 1234.",
    "ldap_username"                 => "LDAP Username",
    "ldap_username_desc"            => "The username that the operator will use to login to the helpdesk (their LDAP username.)",
    "ldap_rdn"                      => "LDAP RDN or DN",
    "ldap_rdn_desc"                 => "The distinguished name for the LDAP username, for example: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP Details",

    "operator_details"              => "Operator Details",

    "enable_ldap"                   => "Enable LDAP Login",
    "enable_ldap_desc"              => "If you use LDAP, you can enable it for operator login. After enabling, go to the LDAP Accounts settings page to configure it.",
    "user_reg_enabled"              => "User Registration Enabled",
    "user_reg_enabled_desc"         => "Allow new users to register an account in the frontend.",
    "user_reg_captcha"              => "User Registration Captcha",
    "user_reg_captcha_desc"         => "If the captcha should be shown to new users registering.",
    "user_name_format"              => "Name Format",
    "first_last"                    => "First Last",
    "last_first"                    => "Last First",
    "first_l"                       => "First L.",
    "f_last"                        => "F. Last",
    "password_length"               => "Password Length",
    "password_length_desc"          => "The minimum length in characters for the password when registering or updating an account.",
    "password_strength"             => "Password Strength",
    "password_strength_desc"        => "Select which characters are required when registering a user password.",
    "password_str_must_contain"     => "Must contain:",
    "password_str_letters"          => "At least one alphabetic character.",
    "password_str_digits"           => "At least one digit.",
    "password_str_case"             => "Both upper and lowercase characters.",
    "password_str_symbols"          => "At least one symbol.",

    "load_template"                 => "Load Template",
    "load_template_desc"            => "Choosing a template will replace the current email subject and message.",
    "clear_template"                => "Clear Template",

    "personal_settings"             => "Personal Settings",
    "personal_settings_desc"        => "Update your own profile and modify settings that relate only to your operator account.",
    "two_fa"                        => "Two-Factor Authentication",
    "notifications"                 => "Notifications",
    "two_fa_success_disabled"       => "Two-factor authentication has successfully been disabled.",
    "two_fa_success_enabled"        => "Two-factor authentication has successfully been enabled.",
    "two_fa_incorrect"              => "The code was incorrect, ensure that the code you entered is correct and that the server time is in sync.",
    "two_fa_enabled"                => "2FA Enabled",
    "two_fa_disable"                => "To disable 2FA, please verify below.",
    "two_fa_enable"                 => "To enable 2FA, please set up the account on your phone using the details below and verify.",
    "verify_code"                   => "Verify Code",
    "verify_and_disable"            => "Verify & Disable",
    "verify_and_enable"             => "Verify & Enable",
    "verify_code_desc"              => "Enter a valid code for your 2FA account to disable 2FA authentication.",
    "qr_code"                       => "QR Code",
    "two_fa_code"                   => "2FA Code",
    "two_fa_secret"                 => "2FA Secret",
    "two_fa_secret_desc"            => "Please store this somewhere safe as you will need this to re-add the authenticator account to your phone should you lose access.",
    "desktop_notifications"         => "Desktop Notifications",
    "browser_notifications"         => "Browser Notifications",

    "search_for_user"               => "Search for user...",
    "select_operator"               => "Select an operator...",
    "select_group"                  => "Select a group...",

    "your_ip_has_been_banned"       => "Your IP has been banned.",
    "password_reset_success"        => "Password reset successfully!",

    "simpleauth_token_expired"      => "The access token has expired.",
    "simpleauth_token_invalid"      => "The access token provided is invalid.",
    "simpleauth_invalid_guard"      => "Cannot login as not a valid user.",
    "simpleauth_not_allowed"        => "Operators cannot currently login with SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Email History",
    "view_email"                    => "View Email",

    "ban_after_count"               => "Ban IP after Failed Logins",
    "ban_after_count_user"          => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the frontend for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_after_count_operator"      => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the operator panel or API for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_length"                    => "Length of IP Ban",
    "ban_length_desc"               => "The length of the IP ban when they reach the configured number of failed logins in a single day.",
    "n_failed_logins"               => ":count failed logins within 24 hours",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Taking a break...",
    "operator_session_expired"      => "You were inactive for a while or logged in on another device so I took a quick nap. Please wake me up by logging back in.",
    "log_back_in"                   => "Log Back In",
    "all_users"                     => "All Users",
    "all_operators"                 => "All Operators",
    "email_per_batch"               => "Emails Per Batch",
    "email_per_batch_desc"          => "The number of emails that are sent together at a time.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "The gap between the email batches in minutes. 1 minute is the minimum.",
    "select_user_groups"            => "Select user/operator groups or type in email addresses...",
    "mass_email_sending_time"       => "It will take approximately :time to send all emails.",
    "organisations_enabled"         => "Organisations Enabled",
    "organisations_enabled_desc"    => "By default, users can add an organisation to their profile and add other users to that organisation. If you are only dealing with consumers, you can disable the organisation option and hide it from the interface.",
    "manager_notifications"         => "Organisation Manager Notifications",
    "manager_notifications_desc"    => "If managers of organisations should receive email updates of tickets opened by other users in the organisation by default. Each manager will have their own personal option for this in their profile and can override this setting.",
    "manager_email_notifications_desc" => "If they should receive email notifications of updates to tickets opened by other users in the organisation.",
    "organisation_notifications_desc" => "If you'd like to receive email notifications of updates to tickets opened by other users in your organisation.",
    "select_operator_group_desc"    => "Please select at least one operator group for this operator.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisation Custom Field|Organisation Custom Fields",
    "recent_users"                  => "Recent Users",
    "recent_organisations"          => "Recent Organisations",
    "group_brand_desc"              => "Select which brands the operators in this group have permission to access.",
    "select_operators"              => "Select operator(s)...",
    "select_groups"                 => "Select group(s)...",
    "group_department_desc"         => "Assign all members of this group to departments, operators can also be assigned individually in the department settings.",
    "op_settings_group_dept"        => "Assigned to via operator groups:",
    "op_settings_group_dept_desc"   => "These departments are inherited automatically from the operator groups selected above. To assign via an operator group, edit the operator group or department settings.",
    "op_settings_individual_dept"   => "Assigned to individually:",
    "op_settings_individual_dept_desc" => "These departments are in addition to any departments the operator is assigned to via their groups above.",
    "also_registered_other_brand"   => "This user is also registered in the :brands brand.|This user is also registered in the :brands brands.",
    "view_organisation"             => "View Organisation",
    "new_owner"                     => "New Owner",
    "operator_role"                 => "Operator Role|Operator Roles",
    "manage_users"                  => "Manage Users",
    "manage_organisations"          => "Manage Organisations",
    "manage_operators"              => "Manage Operators",
    "user_profile"                  => "User Profile",
    "organisation_access_level"     => "Organisation Access Level",
    "organisation_notifications"    => "Organisation Notifications",
    "organisation_users"            => "Organisation Users",
    "organisation_users_ticket"     => "Above is a list of your organisation's managers that will be also emailed updates about this ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Change Password",
    "current_password"              => "Current Password",
    "new_password"                  => "New Password",
    "personal_confirm_password"     => "Please confirm your current password to set a new password.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Search for user/operator...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "The format that is used to display user names throughout the system.",
    "operator_name_format_desc"     => "The format that is used to display operator names throughout the system.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Remove From :record?",
    "remove_from_warn"              => "This will permanently remove the <strong>:name</strong> user from the :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social Login",
    "login_via"                     => "Log in via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Please log in to complete linking of your social account.",
    "social_linking_register"       => "Please fill in the details below to complete registration of your account. Your social account will be automatically linked.",
    "already_registered"            => "Already registered?",
    "linked_accounts"               => "Linked Accounts",
    "unlink_account"                => "Unlink :record Account",
    "unlink_account_warning"        => "Unlinking the social account will mean it can no longer be used to log in directly to the account.",
    "failed_login"                  => "Failed Login|Failed Logins",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "must have \":permission\" permission",
    "deleted_user"                  => "Deleted User",
    "access_level_not_owner"        => "It is not possible to change the access level of organisation owners. Transfer organisation ownership to another user first by viewing the organisation and clicking the 'Users' tab.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Select an existing or enter a new organisation...",

    /*
     * 2.5.0
     */
    "success_register_desc"         => "Thank you for registering an account. Please check your email to complete the account setup.",
    "use_gravatar"                  => "Use Gravatar",
    "use_gravatar_desc"             => "Gravatar is a service which offers a globally recognised avatar to its registered users. The help desk will automatically send a request to secure.gravatar.com with an MD5 hash of each user email address to assist in displaying an avatar. The MD5 hash may also be publicly visible in the frontend HTML. We recommend to update your privacy policy if enabling this feature.",

    /*
     * 2.6.0
     */
    "continue_to_login"             => "Please continue to <a href=':route'>login</a>.",
    "reset_request_desc"            => "If a matching account was found, an email will be sent to you shortly to allow you to reset your password.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Account is linked to an LDAP service. Please log in using your LDAP username and password.",
    "operator_message"              => "Operator Messages",
    "force_two_fa"                  => "Force 2FA",
    "force_two_fa_desc"             => "Force two-factor authentication (2FA) on all accounts. Any account without 2FA enabled will be taken through the steps to set it up when they next login.",
    "two_fa_required"               => "Two-factor authentication (2FA) is required. Please follow the information below to proceed.",
    "two_fa_user_enable"            => "The user can enable 2FA on their account in their settings.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Allow users to register and log in using their social account.",
    "manage_social_login_options"   => "To add or manage social login options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Download and install one of the following applications and scan the QR code or enter the secret key. This will set up your account on your device, you will then be able to view the account and it will generate a 6 digit code that you must enter to verify and complete the set up. Please ensure to click verify before the code expires. Your server time will need to be in sync with an NTP server to function properly.",
    "two_fa_successfully_enabled"   => "Two-factor authentication (2FA) has been successfully enabled.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Phone Number|Phone Numbers",

    /*
     * 3.6.0
     */
    "security_settings"             => "Security Settings",
    "security_settings_desc"        => "Update your password, enable 2FA and manage other security related settings for your account.",
    "active_sessions"               => "Active Sessions",
    "active_sessions_desc"          => "This is a list of devices that have logged into your account, you may revoke any sessions that you do not recognise.",
    "current_session"               => "Current Session",
    "logged_in"                     => "Logged In",
    "revoke_session_desc"           => "Revoking a session will log the device out of the operator panel. It will also revoke all remember me tokens for other devices.",

    /*
     * 4.0.0
     */
    "verify_phone_number"           => "Verify Phone Number",
    "verify_phone_method"           => "Select the method you wish to verify your phone number.",
    "verify_phone_code_sent"        => "A verification code has been sent to your phone number, please enter this code below.",
    "verify_phone_code_send_error"  => "An error occurred while sending the verification code. Please try again later.",
    "verify_phone_code_error"       => "Code could not be verified.",
    "logged_in_as"                  => "Logged in as :name",

    /*
     * 4.1.0
     */
    "merge_users"                   => "Merge Users",
    "merge_user_into"               => "Select user to merge into",
    "merge_organisations"           => "Merge Organisations",
    "merge_organisation_into"       => "Select organisation to merge into",
    "search_for_organisation"       => "Search for organisation...",

    /*
     * 4.2.0
     */
    "reply_template"                => "Reply Template|Reply Templates",
    "reply_template_desc"           => "Set a personal reply template that prefills the textarea when starting to compose a reply, with the option to customise based on the brand/department of the ticket. The default reply template is used when a reply template for a specific department and/or brand cannot be found.",
    "operator_reply_template"       => "Operator Reply Template|Operator Reply Templates",
    "ticket_reply_template_desc"    => "Set the operator's default ticket reply template.",
    "operator_reply_template_desc"  => "Further reply templates for specific departments and/or brands can be set in the <a href=':route' target='_blank'>Operator Reply Templates</a> section.",

    /*
     * 5.0.0
     */
    "verified"                      => "Verified",
    "unverified"                    => "Unverified",
    "unverified_email_desc"         => "User has not verified ownership of this email address.",
    "unverified_account"            => "Please check your email to verify ownership of this email address.",
    "changing_email_desc"           => "Changing the email address will require the user to verify their email address when they next login.",
    "unregistered_user_desc"        => "This account was created automatically without a password. You can send a verification email to let them set up their own account or set a password for them below.",
    "send_verification_email"       => "Send Verification Email",
    "mark_as_verified"              => "Mark as Verified",
    "password_reset_already"        => "You have already verified ownership of this email address, you may proceed to login.",
    "verification_email_resent"     => "A new verification email has been sent and should arrive in a few minutes.",
    "verified_set_password_desc"    => "Thank you for verifying ownership of your email, please enter a password below to finish your account set up.",
    "thank_you_for_verifying_email" => "Thank you for verifying ownership of your email address.",
    "organisation_domain_desc"      => "Enter each domain owned by the organisation. Users who register with an email address which belongs to one of those domains will be automatically added to the organisation. We recommend to verify the user is genuinely part of the organisation if they have not verified ownership of their email address.",
    "resend_verification_email"     => "Resend Verification Email",
    "updating_email_address"        => "To complete the update of your email address, please click on the link sent to :email to verify ownership of the new email address.",
    "email_verification"            => "Email Verification",
    "email_verification_already_in_use" => "The email address is already in use by another account.",
    "verification_link_expired"     => "The verification link may have expired. If your link isn't working for any reason, please request a new one.",
    "user_invited_to_organisation"  => "The user has been invited to the organisation by email, they must click the link and set up a password to complete their account setup.",
    "invite_user"                   => "Invite User",
    "organisation_invite_user"      => "Invite user to organisation",
    "user_already_in_organisation"  => "The user is already part of an organisation.",
    "invitations"                   => "Invitation|Invitations",
    "invite_exists"                 => "The user has already been invited.",
    "success_join"                  => "You are now a member of the organisation :name.",
    "error_join"                    => "The invitation code could not be found, or has expired.",
    "verify_to_view_tickets"        => "Please verify all additional email addresses or remove unverified email addresses under your account profile.",

    /*
     * 5.3.0
     */
    "email_verified"                => "Email Verified",
    "registered_desc"               => "If the user has a password set and is able to login to the frontend.",
    "new_operator_account_desc"     => "You can send a verification email to let the operator set up their own account or toggle to set a password for them below.",
    "operator_set_password_desc"    => "Please enter a password below to finish setting up your operator account.",
    "password_set_success"          => "Password set successfully!",

    /*
     * 5.7.0
     */
    "reply_template_cursor_position" => "Use the 'Set Cursor Position' option in the editor to specify where the cursor will be positioned when the user opens the editor to reply to a ticket.",
    "system_bot_desc"               => "This is a system bot account used for automated actions. You can only edit its name and avatar.",
    "notification_settings"         => "Notification Settings",
    "operator_notifications"        => "Operator Notifications",
    "operator_notifications_desc"   => "Update the notification preferences for the operator account.",
    "default_department_subscription" => "Default Department Subscription",
    "default_department_subscription_desc" => "Set the default notification subscription to determine when notifications are sent on ticket events. This subscription will be used for any department that does not have a specific subscription configured.",
    "department_subscriptions"      => "Department Subscriptions",
    "department_subscriptions_desc" => "Customise the notification subscription for each department.",
    "subscription_type"             => "Subscription Type",
    "subscription_default"          => "Default",
    "subscription_default_desc"     => "Use the default department subscription for this department.",
    "subscription_all_activity"     => "All Activity",
    "subscription_all_activity_desc" => "Receive notifications about all activity in this department.",
    "subscription_unassigned_and_assigned" => "Unassigned and Assigned",
    "subscription_unassigned_and_assigned_desc" => "Receive notifications from this department when there are no assignees on the ticket, or when you are assigned. Notifications are also sent when watching the ticket or @mentioned.",
    "subscription_assigned_only"    => "Assigned Only",
    "subscription_assigned_only_desc" => "Receive notifications from this department only when assigned to the ticket. Notifications are also sent when watching the ticket or @mentioned.",
    "subscription_ignore"           => "Ignore",
    "subscription_ignore_desc"      => "Don't receive notifications for any activity in this department, apart from when watching or @mentioned.",
    "configure_on_operator_notifications" => "Department-specific notification subscriptions can be set on the <a href=':route' target='_blank'>operator notifications</a> page.",
    "notification_channel_email"    => "Email",
    "notification_channel_browser"  => "Browser",
    "browser_notifications_desc"    => "The system will notify you of certain events through the browser. You can choose between desktop notifications, in-app notifications, or disabling them completely.",
    "failed_login_notification"     => "Failed Operator Login",
    "failed_login_notification_desc" => "Notifies you when someone fails to log in to the operator panel or has their IP banned due to multiple failed login attempts.",
    "notifications_desc"            => "Select the channels on which you would like to be notified about system events, or disable individual notifications completely.",
    "in_app_notifications"          => "In-App Notifications",

);
