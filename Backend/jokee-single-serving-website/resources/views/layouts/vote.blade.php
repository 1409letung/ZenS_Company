@extends('index')

@section('vote')
    <div class="vote">
        <p class="excerpts">
            A child asked his father, "How were people born?" So his father said, "Adam and Eve made babies, then their
            babies became adults and made babies, and so on." The child then went to his mother, asked her the same
            question and she told him, "We were monkeys then we evolved to become like we are now." The child ran back
            to his father and said, "You lied to me!" His father replied, "No, your mom was talking about her side of
            the family."
        </p>
        <hr>
        <div class="funny">
            <form action="{{ route('check_vote') }}" method="post">
                @csrf
                <input type="submit" name="yes" value="This is Funny!" class="yes-funny">
                <input type="submit" name="no" value="This is not funny." class="no-funny">
            </form>

        </div>
    </div>
@endsection
