# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "../css"
sass_dir = "../sass"
images_dir = "../img"
javascripts_dir = "../js"

#圧縮(:nested, :expanded, :compact, or :compressed)
output_style = (environment == :production) ? :compressed : :expanded

#SASS内の行番号出力(true or false)
line_comments = (environment == :production) ? false : false
encoding = "utf-8"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
