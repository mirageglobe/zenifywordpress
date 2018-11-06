ZenifyWP
================================================

- Author: Jimmy MG Lim (mirageglobe@gmail.com)
- Twitter: @mirageglobe
- Blog: www.mirageglobe.com
- Source: https://github.com/mirageglobe/zenifywp
- License: Apache License 2.0

ZenifyWP is designed to make the development of wordpress themes simplier. It is built using HTML5 with responsive bootstrap (with bootstrap mobile first in mind). It now includes fontawesome, bootstrap, jquery by default and has a carousel which can be enabled.

![Zenify Screenshot](https://raw.githubusercontent.com/mirageglobe/zenify/master/screenshot.png)

*Inspired/Forked from Bones (Eddie Machado http://themble.com/bones) and Zenhabits*


# Features

- WooCommerce Compatible
- Includes Bootstrap (via CDN)
- Includes FontAwesome (via CDN)
- Includes Jquery (via CDN)
- Includes top fonts (Source Sans Pro, OpenSans, Lato)
- Mobile first responsive
- Preset gallery layout supported
- RSS Feed supported
- Modular layout design
- New theme compliant customisation via Appearance > Customize > Zenify Settings
- Options to show one of three menu layouts (left/right/top)
- Options to show/hide author name

# To use

use either method 1

- checkout the repository
- run buildzip.sh which builds a zip file of the theme which can be added to themes in wordpress

method 2

- download from github as source
- compress into zip file as zenifywp.zip
- upload to wordpress themes

# Guidelines and Roadmap

This project has some primary goals and guidelines:

## Guidelines

- Minimal number of files (php files, settings, etc)
- Use CDN (content delivery network) when possible to reduce hosted repos
- Mobile responsive enabling
- Follow Bootstrap guidelines
- Simple and Clean UX/UI (rule of thumb: if something is not essential, remove it)

## Roadmap / Bugs

- share social media snippet code at end of page
- [done] default value of getopt should be top
- [done] using options for enabling / disabling display author
- [done] using options for displaying menuboxtop/bottom/leftside
- [done] support child themes
- [done] include postthumbnail. https://codex.wordpress.org/Function_Reference/get_the_post_thumbnail
- [done] set width of content to 420px which is max reading width - http://maxdesign.com.au/news/em/
- [done] activate search tool

# References

- https://codex.wordpress.org/Theme_Development#Template_File_Checklist

# License

Copyright 2010 Jimmy MG Lim (mirageglobe@gmail.com)

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

License Breakdown: https://tldrlegal.com/license/apache-license-2.0-(apache-2.0)
