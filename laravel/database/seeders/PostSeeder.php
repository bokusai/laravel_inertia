<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$insertData = [
			[
				'title' => 'sample title',
				'body' => 'sample body',
			],
			[
				'title' => 'sample title',
				'body' => 'sample body',
			],
			[
				'title' => 'sample title',
				'body' => 'sample body',
			],
			[
				'title' => 'sample title',
				'body' => 'sample body',
			],
		];

		foreach ($insertData as $key => $data) {
			Post::create([
				'title' => $data['title'] . ' ' . $key,
				'body' => $data['body'] . ' ' . $key,
			]);
		}
	}
}
