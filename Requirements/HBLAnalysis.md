# Plugin: Hotel Booking Lite

### Hooks and features for adding personal code:

The plugin Hotel Booking lite allows to integrate personal code and plugins by using Hooks in their "plugin.php" file.

<br>

- Files can be easily included in the plugin

    In this particular plugin, all the necessary files are loaded/included after the constructor is run. This happens in the function "afterConstruct()", which runs right after the constructor. Since all the files are loaded at once, it is (on the first glance) easy to include and load personal plugins. Unfortunately, this requires maintenance, since this file will probably be overwritten with every update. So changes to this file will be lost after every update. 

- This plugin utilizes a couple of hooks to add functionality

    After the files are loaded, there are numerous "add_action()"-functions, which are hooks to add functionality to the website. Using these hooks, we can potentially add our own functions to change the behavior of the website or add our own functionality.

<br>

After some more exploration, we were able to find out that all missing requirements of the hotel booking lite plugin can be fulfilled with different plugins or add-ons.

That said, the photo identification can be added with the add-on "Hotel Booking Checkout Fields". With this add-on, customers are required to upload an image to complete the booking process. Unfortunately, this add-on does come with some fees, which makes it out-of-scope for our project.

Regarding the Google Maps integration, we count on third-party plugins to allow us an easy deployment of Google Maps locations of the properties. One example is the plugin "WP Go Maps". This plugin uses shortcodes to integrate maps. It is worth noting that this might also include additional fees for the client, which would put this requirement out-of-scope for this project. 
