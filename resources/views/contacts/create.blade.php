<!-- resources/views/contacts/create.blade.php -->

<form action="{{ route('contacts.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="subject">Subject:</label>
    <input type="text" name="subject" required>
    <br>
    <button type="submit">Submit</button>
</form>
