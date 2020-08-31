<?php

function handleDashboard()
{
    if (auth()->user()->hasRole('admin')) {
        return redirect(route('admin.dashboard'));
    }
    if (auth()->user()->hasRole('contestant')) {
        return redirect(route('contestant.dashboard'));
    }
    if (auth()->user()->hasRole('student')) {
        return redirect(route('student.dashboard'));
    }
}
