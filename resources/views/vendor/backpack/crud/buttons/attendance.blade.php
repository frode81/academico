@if($entry->events->count() > 0 && $entry->exempt_attendance !== 1)
	<a href="{{ route('monitorCourseAttendance', ['course' => $entry->getKey()]) }}" class="btn btn-sm btn-link">
		<i class="fa fa-calendar"></i>
	</a>
@endif