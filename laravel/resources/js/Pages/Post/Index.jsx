import { Head } from '@inertiajs/react'

console.log('test');

export default function Index(props) {

	console.log(props);

	return (
		<>
			<h1>Welcome</h1>
			<p>Hello , welcome to your first Inertia app!</p>
		</>
	)
}
