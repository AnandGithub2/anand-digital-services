<!DOCTYPE html>
<html>

<head>

<title>Admin Dashboard</title>

@vite(['resources/css/app.css'])

</head>


<body class="bg-slate-950 text-white">


<div class="max-w-5xl mx-auto p-6">


<h1 class="text-3xl font-bold mb-8 text-amber-400">
Anand Digital Services Admin
</h1>


<div class="grid gap-5">


@foreach($contacts as $contact)


<div class="bg-slate-900 rounded-xl p-5 border border-slate-800">


<h2 class="text-xl font-bold">
{{ $contact->name }}
</h2>


<p>
📧 {{ $contact->email }}
</p>


<p>
📱 {{ $contact->phone }}
</p>


<p class="mt-3 text-slate-400">
{{ $contact->message }}
</p>


</div>


@endforeach


</div>


</div>


</body>

</html>