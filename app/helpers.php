<?php

if (! function_exists('flashStatus')) {
    /**
     * Flash informative message to session.
     *
     * @param string $message
     * @param string $title
     * @param string $type
     */
    function flashStatus(string $message, string $title = 'Notice', string $type = 'success')
    {
        session()->flash('status', [
            'message' => $message,
            'title' => $title,
            'type' => $type,
        ]);
    }
}
