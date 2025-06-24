vcl 4.1;

backend default {
    .host = "nginx";
    .port = "8040";
    .connect_timeout = 5s;
    .first_byte_timeout = 600s;
    .between_bytes_timeout = 600s;
}