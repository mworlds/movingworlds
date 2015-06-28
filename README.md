Build the source using the following:

    bundle exec ruhoh compile

View the site using:

    simple-server compiled

Output list of contributors, e.g.

    cat Translating-Southeast-Asia.md | grep -Po '\*{2}(.*?)\*{2}' | sed  -e 's/\*//g' | sort | uniq | awk '{ print "- " $0}'
