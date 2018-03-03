if ARGV.empty? then
	exit
end

html = File.read(ARGV[0])

body = html.split("</head>")

for n in 0..(body.length - 2) do
	body[n] += "</head>"
end

# <div class="shit<a">

body.each { |a| print a, "\n" }
