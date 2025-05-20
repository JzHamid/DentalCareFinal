<h2>Appointment Denied</h2>

<p>Dear {{ $appointment->name }},</p>

<p>We regret to inform you that your appointment on {{ $appointment->date }} at {{ $appointment->time }} has been denied.</p>

<p><strong>Reason:</strong> {{ $reason }}</p>

<p>If you have any questions or need to reschedule, feel free to contact us.</p>

<p>Thank you.</p>
