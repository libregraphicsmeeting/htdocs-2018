# To prevent problems of encoding when compiling:
Encoding.default_external = "utf-8"

require 'compass/import-once/activate'
require 'sass-globbing'

preferred_syntax = :sass

# Set this to the root of your project when deployed:
http_path       = "/"
css_dir         = "."
sass_dir        = "sass"
images_dir      = "images"
javascripts_dir = "javascripts"

output_style    = :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# Set abstractions as an import path to every partial
add_import_path "sass/abstractions"

#
# Output style
#
output_style  = :compressed 
line_comments = (environment == :production) ? false : true

# To prevent warnings about deprecated stuff
disable_warnings = true
