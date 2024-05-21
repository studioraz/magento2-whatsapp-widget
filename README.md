# Magento 2 WhatsApp Widget

## Module Features
The Magento 2 WhatsApp Widget module provides a convenient way for customers to contact store support via WhatsApp directly from the website. This widget can be configured to display on various pages, offering quick and easy access to customer support.

### Features:
- Display WhatsApp contact widget on the frontend
- Configurable WhatsApp number and message
- Enable/disable widget through the admin panel
- Set custom positions for the widget on the frontend

## System Configuration
The module provides several configuration options available in the Magento admin panel under `Stores > Configuration > WhatsApp Widget`.

### Configuration Options:
1. **Enable Widget**: Enable or disable the WhatsApp widget.
2. **WhatsApp Number**: Set the WhatsApp number that will be contacted.
4. **Widget Custom CSS**: Modify the widget's CSS to change position, size, color etc.

## Installation Instructions
To install the Magento 2 WhatsApp Widget module via Composer, follow these steps:

1. **Require the Module**
   - Run the following command to require the module via Composer:

     ```bash
     composer require studioraz/magento2-whatsapp-widget
     ```

2. **Enable the Module**
   - Run the following commands in your Magento root directory to enable the module and update the Magento installation:

     ```bash
     bin/magento module:enable SR_WhatsAppWidget
     bin/magento setup:upgrade
     bin/magento setup:di:compile
     bin/magento setup:static-content:deploy -f
     ```

3. **Configuration**
   - After successful installation, log in to the Magento admin panel and navigate to `Stores > Configuration > WhatsApp Widget` to configure the module settings.


Feel free to modify the README content based on specific requirements or additional details.

<img width="864" alt="image" src="https://github.com/studioraz/magento2-whatsapp-widget/assets/493197/f808791e-2a1c-4069-8593-85e040c2dcd3">
