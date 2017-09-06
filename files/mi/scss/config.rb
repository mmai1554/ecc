
# Require any additional compass plugins here.

Encoding.default_external = 'utf-8'

project_type = :stand_alone
asset_cache_buster :none
http_path = "./"
css_dir = "../css"
sass_dir = "."
images_dir = "../img"
fonts_dir = "../fonts"
http_images_path = "../img"
http_fonts_path = "../fonts"
javascripts_dir = "../js"

# sourcemap sass > 3.3
sourcemap = true

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :compact

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false
