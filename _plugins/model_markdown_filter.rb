module Jekyll
  module ModelMarkdownFilter
    def model(input)
      tmpl = File.read File.join Dir.pwd, "models", input
      tmpl = (Liquid::Template.parse tmpl).render
      html = Kramdown::Document.new(tmpl).to_html
      # site = @context.registers[:site]
      # converter = site.find_converter_instance(Jekyll::Converters::Markdown)
      # converter.convert(tmpl)
    end
  end
end

Liquid::Template.register_filter(Jekyll::ModelMarkdownFilter)
