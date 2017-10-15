# htdocs-2018

The website for the lgm 2018


- The website is published at <http://libregraphicsmeeting.org/2018>
- The admin console is available through <http://libregraphicsmeeting.org/2018/wp/wp-admin>

This repository contains:

- a `wp/` directory with all wordpress related files (<https://github.com/libregraphicsmeeting/infrastructure/tree/master/tuxfamily#the-website>)
- the plugins created for the lgm 2018 in `wp/wp-content/plugins/`
  - "LGM Sanitize Settings 2018"? (as a copy of the one for 2018)
- the theme created for the lgm 2018 in `wp/wp-content/themes/`
  - "lgm2018"
- On Github there is a webhook for automatically deploying the changes to the website.
  - It triggers `git pull` on the tuxfamily server.
  - Take care not to add to the repository any file that is managed through the Wordpress UI.

All "standard" plugins and themes are installed through the Wordpress UI:

- WP Libre Form: for the registration, the call for participation  and the reimbursements.

## Licensing

All the WordPress related parts (the files included in *plugins* and *themes*) are released under the GNU General Public License v2.

All the graphic assets (the files included in *graphics*) are released under the CC-BY license.
