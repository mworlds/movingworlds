class Ruhoh
  module Templaters
    module Helpers
      
      def categories
        cats = []
        self.context['db']['posts']['categories'].each_value { |cat| cats << cat unless cat["name"].match(/^volumes\//) || cat["name"].match(/^issue/) }
        cats
      end
            
      def to_previous_issues(sub_context)
        
        posts = Array(self.context['db']['posts']['chronological']).collect { |id|
          self.context['db']['posts']['dictionary'][id]
        }
        
        if posts.count > 0
          posts.slice(1, posts.count)
        else
          posts
        end
        
      end
      
      
    end
  end
end