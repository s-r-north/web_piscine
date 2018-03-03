require 'date'

if ARGV.empty?
	exit!
end

def error_fmt
	print "Wrong Format\n"
	exit!
end

arr = ARGV[0].split(' ')

if arr.length != 5 then
	error_fmt
end

weekday = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeundi", "Venredi", "Samedi"]

wd = weekday.index(arr[0])

if wd == nil then
	error_fmt
end

month = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]

mo = month.index(arr[2])

if mo == nil then
	error_fmt
end

mo += 1

time = arr[4].split(':')

t_len = time.select { |a| a.length != 2 }
t_neg = time.select { |a| a.to_i < 0 }

if time.length != 3 || !t_len.empty? || !t_neg.empty? || time[0].to_i > 23 || time[1].to_i > 59 || time[2].to_i > 59 then
	error_fmt
end

d = arr[1].to_i

if d < 1 || d > 31 then
	error_fmt
end

if arr[3].to_i == nil || arr[3].length != 4 then
	error_fmt
end

str = wd.to_s + ',' + arr[3] + '-' + mo.to_s + '-' + arr[1] + ',' + arr[4] + " +01:00"

t = DateTime.strptime(str, '%w,%Y-%m-%d,%H:%M:%S %z').to_time.to_i

print t, "\n"
