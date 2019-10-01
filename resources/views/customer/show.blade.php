<h1>Customer Details</h1>

<div>
    <a href="/customers">< Back</a>
</div>

<strong>Name</strong>
<p>{{ $customer->name }}</p>

<strong>Email</strong>
<p>{{ $customer->email }}</p>

<div>
    <a href="/customers/{{ $customer->id }}/edit">Edit</a>

    <form action="/customers/{{ $customer->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button>Delete</button>
    </form>
</div>
