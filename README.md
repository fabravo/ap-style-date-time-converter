# Frank's Super Cool AP Style Date and Time Converter
**Contributors:** fabravo  
**Tags:** date, time, AP style, WordPress, Gutenberg  
**Tested up to:** 6.7  
**Stable tag:** 1.0  
**License:** GPLv3  
**License URI:** http://www.gnu.org/licenses/gpl-3.0.html  

A WordPress plugin that dynamically converts displayed dates and times to AP Style without altering your content.

---

## Description
Do you want your WordPress site to display dates and times in Associated Press (AP) style but don’t have a built-in option? **Frank’s Super Cool AP Style Date and Time Converter** dynamically transforms date and time formatting throughout your site (including post metadata and custom blocks) to AP Style without changing your content. This is perfect for journalists, bloggers, and media organizations adhering to professional style guides.

I'm [Frank Bravo](https://www.linkedin.com/in/fabravo) and I am a [technologist](https://www.bravoitc.com). My regular full-time job is CTO at a hyper-local, non-profit media organization, the [Embarcadero Media Foundation](https://www.EmbarcaderoMediaFoundation.org) in the San Francisco Bay Area. In 2024, we migrated our home-grown CMS to a Wordpress-based system. Since our vendor didn't have a way to present datelines in AP Style date/time format, I built my own.


**Example Conversion:**
- `April 5, 2024 2:28 pm` becomes `April 5, 2024, 2:28 p.m.`
  
**Key Features:**
- Converts standard dates to AP-style abbreviations (e.g., `Jan.`, `Feb.`, `Dec.`)
- Updates times to use periods in `a.m.` and `p.m.` formats
- Works with dynamic content without modifying stored post data
- Supports Gutenberg blocks and post metadata
- Lightweight and efficient

---

## Installation
1. Upload the plugin folder to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. No additional settings are required. The plugin will automatically apply AP Style formatting to dates and times on your site.

---

## Frequently Asked Questions (FAQ)

### **Does this plugin modify my content permanently?**
No, the plugin applies changes dynamically when rendering your content, leaving the original data untouched.

### **Will this work with custom Gutenberg blocks?**
Yes, the plugin applies formatting to most custom and core Gutenberg blocks. If any block is not supported, please contact support.

---

## Requirements
- WordPress 5.0 or later
- PHP 7.4 or higher

You can customize your date format under **Settings** > **General** for additional date options.

---

## Support
If you find something not working within this plugin, please feel free to contact:  
**Email:** support [@] bravoitc.com  

---

## Changelog
### v1.0
- Initial release with dynamic AP Style date and time formatting
- Gutenberg block and post metadata support
- Prevents unwanted changes to regular text containing "am" and "pm"

---

## Credits
Special thanks to journalists everywhere who keep information flowing. ChatGPT was utilized as a tool in the creation of this plugin.

---

## License
This plugin is licensed under the GPLv3 License. 
