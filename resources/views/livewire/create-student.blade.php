  <form wire:submit="create_student">
    <label for="name">Name:</label>
    <input type="text" id="name" wire:model="name">
    <label for="national_id">National ID:</label>
    <input type="text" id="national_id" wire:model="national_id">
    <label for="email">Email:</label>
    <input type="text" id="email" wire:model="email">
    <label for="name">Date of Birth:</label>
    <input type="text" id="date_of_birth" wire:model="date_of_birth">
    <label for="name">Gender:</label>
    <input type="text" id="gender" wire:model="gender">
    <label for="name">Phone Number:</label>
    <input type="text" id="phone_number" wire:model="phone_number">
    <label for="name">Address:</label>
    <input type="text" id="address" wire:model="address">
    <label for="name">Room Number:</label>
    <input type="text" id="room_number" wire:model="room_number">
    <label for="name">Major ID:</label>
    <input type="text" id="major_id" wire:model="major_id">

    <button type="submit">Save</button>
</form>