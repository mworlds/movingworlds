set :application, "Moving Worlds"
set :repository,  "git-edhiley@pl3.projectlocker.com:movingworlds.git"
set :branch, "master"
set :scm_verbose, true
set :scm, :git
# set :deploy_via, :remote_cache

set :deploy_via, :copy
set :copy_exclude, [".svn", ".git"]

set :use_sudo, false

set :deploy_to, "/home/ehiley/public_html/mworlds"

server "edwardhiley.org.uk", :app, :web, :db, :primary => true

default_run_options[:pty] = true  # Must be set for the password prompt from git to work

set :user, "ehiley"  # The server's user for deploys
set :scm_username, "edhiley@gmail.com"
set :scm_passphrase, "olivercat"  # The deploy user's password
