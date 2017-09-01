# mod_yag_badge - Yet Another GooglePlus Badges (YAGB)
A Joomla module to show the desired Google+ Badge on the frontend.
## introduction
Despite there are thousands of similar extensions, I wanted to create my own Google+ Badge.
I needed something flexible and that could be used in all cases available in Google+ (i.e. Author, Publisher and Community). Also I neded somethig which whould not introduce heavy javascripts or which whould have included javascript also for all thse pages where the badge was set to be shown.
In other words, I needed something whith the minimum impact on load aspects, on behalf of page and server load, with significant benefits in many areas.
## Prerequisites
The package was developed and tested with the following minimal requirements:
* Joomla! version: 3.4
* PHP vversion: 5.6.0
Although, It was also successfully tested with Joomla! v.3.7.5, PHP v.7.0.1 and MySQL v.5.5.6.34
## Installation
Installation of **mod_yag_badge** is a straight forward task, as usual in a Joomla! environment. Just follow these steps
* Download the extension from the downloads section
* Login to the administrator page
* Go to Extensions -> Extensions Manager
* Choose Browse and find the **mod_yag_badge** file you've just downloaded.
* Click Upload & Install button
* You are done!
## Update (Manual updates)
To update the package, you can easily follow the same steps you used for the installation. 
You do not need to uninstall the package before update. The the extention will automatically update all the needed files transparently.
## Uninstall
To uninstall the module  please use the core extension manager available in the Joomla! Administrator Control Panel.
Just select the module **mod_yag_badge** and click on uninstall.
### Warning!
   **When uninstalling the module, all configuration data will be lost.**
## Module Configuration
Once installed, you will find one instance of the module (disabled) in the Administrator module section (MainManu => Extention => Modules.
Open it to edit and enter your preferred data, as explained below
### Tab "Module"
This is actually the main tab, where most of the useful configuration parameters are located.
#### Profile or Page
Whith this multi-choice buttons you can select what to show on the Google+ Badge
* A Profile Page - That is a page of an individual accoount as registered in Google.
* A Page - That is a page created and managed by individuals
* A Community - That is a page that refers to a community
#### Google+ Profile Id
Simply enter th Google+ profile ID for the Profile, Page or Community.
#### Width (px)
Enter the width in 'px' units dependig on the size of the badge as it should appear on your page.
#### Layout
Please chose between 'Portrait' or 'Landscape' layout as it should appear on your page.
#### Cover theme
Please enter 'Light' or 'Dark' of the color scheme of the badge, as it should appear on your page.
#### Cover photo
Please enter 'True' or 'False', whether you want or not, that your profile photo to appear inside the badge.
#### Tagline
Please select if you want to show the tagline as entered in the Goole+ profile
#### Powered by
Here you can demonstrate that you really love this extension, by selecting 'Enabled'. 
In this case a short line 'Powered by: www.diprimio.com' will be included inside the badge box.
### Tab "Advanced"
Bside other useful parameter you can configure here, you will find **Module class suffix** though which you can assign a suffix to be applied to the CSS class of the module. This allows for individual module styling.
