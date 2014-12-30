module ViewHelpers
  def rel_stylesheet_link_tag(*f)
     styles=stylesheet_link_tag *f
     script_path = self.parser.script_filename.gsub(Compass.configuration.project_path, '')
     child_folder= File.dirname( script_path.gsub(/\/[^\/]+/, '/..')[1..-1] )
     styles.gsub 'href="', "href=\"#{child_folder}"
  end

  def rel_javascript_include_tag(*f)
     styles=javascript_include_tag *f
     script_path = self.parser.script_filename.gsub(Compass.configuration.project_path, '')
     child_folder= File.dirname( script_path.gsub(/\/[^\/]+/, '/..')[1..-1] )
     styles.gsub 'src="', "src=\"#{child_folder}"
  end
end
