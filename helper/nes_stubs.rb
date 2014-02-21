require 'clipboard'


class Robot


	def initialize
		@text = String.new
	end

	def getSome

		puts "Enter game name:"
		name = gets.chomp!
		
		puts "Enter filename:"
		filename = gets.chomp!

		@text += "NesGame::create(array(\n\t'name' => '#{name}',\n\t'filename' => '#{filename}',\n\t'boxart' => true,\n\t'description' => 'This game needs a description'\n));\n"

		puts "Enter q to quit or something else to not quit"
		gets.chomp!
	end
	
	def finish
		Clipboard.copy @text
	end
	
end

bot = Robot.new

while bot.getSome != "q"
end

bot.finish