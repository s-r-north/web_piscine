class PagesController < ApplicationController
	def show
		render template: "pages/#{params[:page]}"
	end
end

class StylesheetsController < ApplicationController
	def show
		render template: "stylesheets/#{params[:sheet]}"
	end
end
