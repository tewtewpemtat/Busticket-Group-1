use crate::handlers::bus_handler::{get_bus, update_bus_ticket};
use actix_web::web;

pub fn config(cfg: &mut web::ServiceConfig) {
    cfg.service(get_bus);
    cfg.service(update_bus_ticket);
}
