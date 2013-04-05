#!/usr/bin/env ruby



def fact number
	if (number == 0 || number == 1)
		return number
	else
		return number * fact(number - 1)
	end
end

puts "Recursive Factorial"
puts "0! => " + fact(0).to_s
puts "1! => " + fact(1).to_s
puts "2! => " + fact(2).to_s
puts "3! => " + fact(3).to_s
puts "5! => " + fact(5).to_s
puts "6! => " + fact(6).to_s

# beginning_time = Time.now
# puts "1000! => " + fact(1000).to_s
# end_time = Time.now
# puts "Time elapsed #{(end_time - beginning_time)*1000} milliseconds"



## 
# factorial with while loop
# 
def whileFact number
	if number == 0
		return 0
	end

	fact = 1
	while number > 0
		fact = fact * number
		number -= 1
	end
	fact
end


# beginning_time = Time.now
# puts "1000! => " + whileFact(1000).to_s
# end_time = Time.now
# puts "Time elapsed #{(end_time - beginning_time)*1000} milliseconds"

puts 'Output Factorial with While'

puts "1! => " + whileFact(1).to_s
puts "2! => " + whileFact(2).to_s
puts "3! => " + whileFact(3).to_s
puts "5! => " + whileFact(5).to_s
puts "6! => " + whileFact(6).to_s
