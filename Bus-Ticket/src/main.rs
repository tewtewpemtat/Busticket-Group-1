use actix_web::{middleware, App, HttpServer};
use env_logger::Env;

mod handlers;
mod models;
mod routes;

use crate::routes::{bus_route, customer_route, seat_route};

#[actix_web::main]
async fn main() -> std::io::Result<()> {
    env_logger::Builder::from_env(Env::default().default_filter_or("debug")).init();

    HttpServer::new(move || {
        App::new()
            .wrap(middleware::Logger::default())
            .configure(bus_route::config)
            .configure(seat_route::config)
            .configure(customer_route::config)
    })
    .bind("127.0.0.1:8080")?
    .run()
    .await
}
