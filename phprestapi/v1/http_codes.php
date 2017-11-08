<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

     // Note: Only the widely used HTTP status codes are documented

    // Informational

    define("HTTP_CONTINUE","100");
    define("HTTP_SWITCHING_PROTOCOLS","101");
    define("HTTP_PROCESSING","102");            // RFC2518

    // Success

    /**
     * The request has succeeded
     */
    define("HTTP_OK","200");

    /**
     * The server successfully created a new resource
     */
    define("HTTP_CREATED","201");
    define("HTTP_ACCEPTED","202");
    define("HTTP_NON_AUTHORITATIVE_INFORMATION","203");

    /**
     * The server successfully processed the request, though no content is returned
     */
    define("HTTP_NO_CONTENT","204");
    define("HTTP_RESET_CONTENT","205");
    define("HTTP_PARTIAL_CONTENT","206");
    define("HTTP_MULTI_STATUS","207");          // RFC4918
    define("HTTP_ALREADY_REPORTED","208");      // RFC5842
    define("HTTP_IM_USED","226");               // RFC3229

    // Redirection

    define("HTTP_MULTIPLE_CHOICES","300");
    define("HTTP_MOVED_PERMANENTLY","301");
    define("HTTP_FOUND","302");
    define("HTTP_SEE_OTHER","303");

    /**
     * The resource has not been modified since the last request
     */
    define("HTTP_NOT_MODIFIED","304");
    define("HTTP_USE_PROXY","305");
    define("HTTP_RESERVED","306");
    define("HTTP_TEMPORARY_REDIRECT","307");
    define("HTTP_PERMANENTLY_REDIRECT","308");  // RFC7238

    // Client Error

    /**
     * The request cannot be fulfilled due to multiple errors
     */
    define("HTTP_BAD_REQUEST","400");

    /**
     * The user is unauthorized to access the requested resource
     */
    define("HTTP_UNAUTHORIZED","401");
    define("HTTP_PAYMENT_REQUIRED","402");

    /**
     * The requested resource is unavailable at this present time
     */
    define("HTTP_FORBIDDEN","403");

    /**
     * The requested resource could not be found
     *
     * Note: This is sometimes used to mask if there was an UNAUTHORIZED (401) or
     * FORBIDDEN (403) error, for security reasons
     */
    define("HTTP_NOT_FOUND","404");

    /**
     * The request method is not supported by the following resource
     */
    define("HTTP_METHOD_NOT_ALLOWED","405");

    /**
     * The request was not acceptable
     */
    define("HTTP_NOT_ACCEPTABLE","406");
    define("HTTP_PROXY_AUTHENTICATION_REQUIRED","407");
    define("HTTP_REQUEST_TIMEOUT","408");

    /**
     * The request could not be completed due to a conflict with the current state
     * of the resource
     */
    define("HTTP_CONFLICT","409");
    define("HTTP_GONE","410");
    define("HTTP_LENGTH_REQUIRED","411");
    define("HTTP_PRECONDITION_FAILED","412");
    define("HTTP_REQUEST_ENTITY_TOO_LARGE","413");
    define("HTTP_REQUEST_URI_TOO_LONG","414");
    define("HTTP_UNSUPPORTED_MEDIA_TYPE","415");
    define("HTTP_REQUESTED_RANGE_NOT_SATISFIABLE","416");
    define("HTTP_EXPECTATION_FAILED","417");
    define("HTTP_I_AM_A_TEAPOT","418");                                               // RFC2324
    define("HTTP_UNPROCESSABLE_ENTITY","422");                                        // RFC4918
    define("HTTP_LOCKED","423");                                                      // RFC4918
    define("HTTP_FAILED_DEPENDENCY","424");                                           // RFC4918
    define("HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL","425");   // RFC2817
    define("HTTP_UPGRADE_REQUIRED","426");                                            // RFC2817
    define("HTTP_PRECONDITION_REQUIRED","428");                                       // RFC6585
    define("HTTP_TOO_MANY_REQUESTS","429");                                           // RFC6585
    define("HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE","431");                             // RFC6585

    // Server Error

    /**
     * The server encountered an unexpected error
     *
     * Note: This is a generic error message when no specific message
     * is suitable
     */
    define("HTTP_INTERNAL_SERVER_ERROR","500");

    /**
     * The server does not recognise the request method
     */
    define("HTTP_NOT_IMPLEMENTED","501");
    define("HTTP_BAD_GATEWAY","502");
    define("HTTP_SERVICE_UNAVAILABLE","503");
    define("HTTP_GATEWAY_TIMEOUT","504");
    define("HTTP_VERSION_NOT_SUPPORTED","505");
    define("HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL","506");                        // RFC2295
    define("HTTP_INSUFFICIENT_STORAGE","507");                                        // RFC4918
    define("HTTP_LOOP_DETECTED","508");                                               // RFC5842
    define("HTTP_NOT_EXTENDED","510");                                                // RFC2774
    define("HTTP_NETWORK_AUTHENTICATION_REQUIRED","511");
    define("HTTP_DATABASE_ERROR","512");



?>
