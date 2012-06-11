require 'ruhoh'
require 'ruhoh/compiler'

Ruhoh.setup(:log_file => "deploy.log")
Ruhoh.config.env = 'production'
Ruhoh::DB.update_all
Ruhoh::Compiler.compile("compiled")

system("cp", ".htaccess", "compiled/.htaccess")
system("cp", "404error.php", "compiled/404error.php")


# rsync to server ...
#unless system('rsync', '-r -a -v -e', '--stats', '--delete', "compiled/ edwardhiley.org.uk:/home/ehiley/movingworlds_html")
# self.log("ERROR: failed to sync remote dir")
# return false
#end

# this one works ...
# rsync -r -a -v -e "ssh -l ehiley" --delete compiled/ edwardhiley.org.uk:/home/ehiley/movingworlds_html