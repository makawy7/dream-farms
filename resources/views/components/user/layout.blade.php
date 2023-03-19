<!DOCTYPE html>
<html lang="en">
    <x-user.head />
	<body class="p-0">
		<x-user.search />

		<!-- mobile-nav section start here -->
		<x-user.mobile-nav />
		<!-- mobile-nav section ending here -->

		<!-- header section start here -->
		<x-user.header />
		<!-- header section ending here -->

		{{$slot}}

		<!-- footer section start here -->
        <x-user.footer />
	</body>
</html>