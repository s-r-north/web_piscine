const readline = require('readline');

const rl = readline.createInterface({
	input: process.stdin,
	output: process.stdout
});

// rl.question('Enter a number: ', (input) => {
// 	var s;
// 	if (input % 2)
// 		s = 'odd';
// 	else if (!(input % 2))
// 		s = 'even';
// 	// else {
// 	// 	console.log(`${input} is not a number`);
// 	// 	continue ;
// 	// }
// 	console.log('Your number is ' + s);
// });

rl.on('line', (input) => {
	if (1 == (`${input}` % 2))
		return ('odd');
	else if (0 == (`${input}` % 2))
		return ('even');
	else
		return (`${input}`);
});


	console.log('Enter a number: ');
	var b = rl.on();
	if (b)
		console.log('Your number is ' + b);
	else
		console.log("'b' is not a number");
