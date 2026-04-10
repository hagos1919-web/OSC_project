<?php
/*
Plugin Name: System Architect Audit Tool
Description: A custom dashboard to monitor system health and security.
Version: 1.0
Author: [Your Name]
*/

// Prevent direct access
if (!defined('ABSPATH')) exit;

// 1. Create the Admin Menu
add_action('admin_menu', 'sa_register_audit_menu');

function sa_register_audit_menu() {
    add_menu_page(
        'System Audit',      // Page Title
        'Architect Audit',   // Menu Title
        'manage_options',    // Capability (Admins only)
        'system-audit',      // Menu Slug
        'sa_render_audit_page', // Function to display content
        'dashicons-shield',  // Icon
        3                    // Position
    );
}

// 2. Render the Dashboard Content
function sa_render_audit_page() {
    global $wpdb;
    ?>
    <div class="wrap">
        <h1><span class="dashicons dashicons-performance"></span> System Architect Audit Dashboard</h1>
        <p>Real-time technical overview for project presentation.</p>
        
        <div style="display: flex; gap: 20px; margin-top: 20px;">
            <div style="flex: 1; padding: 20px; background: #fff; border-left: 4px solid #0073aa; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h3>Database Status</h3>
                <p><strong>DB Engine:</strong> <?php echo $wpdb->db_version(); ?></p>
                <p><strong>Table Count:</strong> <?php echo count($wpdb->get_results("SHOW TABLES")); ?></p>
                <p><strong>DB User:</strong> <?php echo DB_USER; ?> (Localhost)</p>
            </div>

            <div style="flex: 1; padding: 20px; background: #fff; border-left: 4px solid #46b450; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h3>Environment Info</h3>
                <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
                <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
                <p><strong>Memory Limit:</strong> <?php echo ini_get('memory_limit'); ?></p>
            </div>
            <div style="flex: 1; padding: 20px; background: #fff; border-left: 4px solid #dc3232; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h3>Security Checklist</h3>
                <?php
                $config_path = ABSPATH . 'wp-config.php';
                $htaccess_path = ABSPATH . '.htaccess';
                
                function check_perms($path) {
                    if (!file_exists($path)) return '<span style="color:orange;">Not Found</span>';
                    $perms = substr(sprintf('%o', fileperms($path)), -4);
                    return ($perms == '0644' || $perms == '0440') 
                        ? '<span style="color:green;">Secure ('.$perms.')</span>' 
                        : '<span style="color:red;">Vulnerable ('.$perms.')</span>';
                }
                ?>
                <p><strong>wp-config.php:</strong> <?php echo check_perms($config_path); ?></p>
                <p><strong>.htaccess:</strong> <?php echo check_perms($htaccess_path); ?></p>
                <p><strong>Directory Listing:</strong> 
                    <?php echo (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) ? '<span style="color:green;">Handled by Apache</span>' : 'Check Config'; ?>
                </p>
            </div>
        </div>
    </div>
    <?php
}