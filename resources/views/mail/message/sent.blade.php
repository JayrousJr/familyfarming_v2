<x-mail::message>
    # Message Received<br>
    <br>

    <x-mail::panel>
        <strong>Message</strong> <br> {{$msg}}
    </x-mail::panel>
    <br> <br>
    Message sent by {{$name}} of email {{$email}}
    <br> <br>
    <x-mail::button :url="'https://familyfarminingltd.com/admin'" color="success">
        Visit Website
    </x-mail::button>

    <strong>David Niyongabo</strong> CEO,<br>
    <strong>Jayrous Eliakimu</strong> Manager.<br>
    Family Farming Company Limited, Tanzania.
</x-mail::message>