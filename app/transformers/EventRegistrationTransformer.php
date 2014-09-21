<?php

class EventRegistrationTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(EventRegistration $registration)
    {
        return array(
            'id' => (int)$registration->id,
            'user_id' => (int)$registration->user_id,
            'event_id' => (int)$registration->event_id,
            'chair_status' => (bool)$registration->chair_status,
            'guest_status' => $registration->guest_status,
            'driver_status' => (bool)$registration->driver_status,
            'passengers' => $registration->passengers,
            'created_at' => $registration->created_at,
            'updated_at' => $registration->updated_at
        );
    }

}
