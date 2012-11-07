func ->
# An extra line
	"bar"
	times = (a = 1, b = 2) -> a * b

	part = ->
		"bar"


	sum = (nums...) -> 
	  result = 0
	  nums.forEach (n) -> result += n
	  result


	trigger = (events...) ->
	  events.splice(1, 0, this)
	  this.constructor.trigger.apply(events)
	  
	a = "Howdy!"

	alert a
	# Equivalent to:
	alert(a)

	alert inspect a
	# Equivalent to:
	alert(inspect(a))

