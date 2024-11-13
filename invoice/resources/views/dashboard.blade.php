<x-app-layout>
<div class="container appointment-form">
    <h1>Make an Appointment</h1>

    <form  method="POST" action="{{route('appoinmentdata')}}">
        @csrf

        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter your phone number" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="date">Preferred Date:</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required>
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="time">Preferred Time:</label>
            <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" required>
            @error('time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit Appointment</button>
    </form>
</div>
  
</x-app-layout>
