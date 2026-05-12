<?php

namespace EntelisTeam\Lbaf\Exception;

enum LogLevelEnum: string
{

    /**
     * System is unusable. Urgent alert.
     */
    case Emergency = 'emergency';

    /**
     * Action must be taken immediately
     * Example: Entire website down, database unavailable, etc.
     * This should trigger the SMS alerts and wake you up.
     */
    case Alert = 'alert';

    /**
     * Critical conditions
     * Example: Application component unavailable, unexpected exception.
     */
    case Critical = 'critical';


    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     */
    case Error = 'error';

    /**
     * Exceptional occurrences that are not errors
     * Examples: Use of deprecated APIs, poor use of an API,
     * undesirable things that are not necessarily wrong.
     */
    case Warning = 'warning';

    /**
     * Uncommon significant events
     */
    case Notice = 'notice';

    /**
     * Interesting events
     * Examples: User logs in, Slow SQL logs.
     */
    case Info = 'info';


    /**
     * Detailed debug information
     */
    case Debug = 'debug';

}
