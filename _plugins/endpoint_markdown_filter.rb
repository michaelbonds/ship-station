module Jekyll
  module EndpointMarkdownFilter
    def endpoint(input)
      tmpl = File.read File.join Dir.pwd, "endpoints", input
      tmpl = (Liquid::Template.parse tmpl).render
      html = Kramdown::Document.new(tmpl).to_html
      # site = @context.registers[:site]
      # converter = site.find_converter_instance(Jekyll::Converters::Markdown)
      # converter.convert(tmpl)
    end
  end
end

Liquid::Template.register_filter(Jekyll::EndpointMarkdownFilter)
