use crate::handlers::seat_handler::{get_seat_by_id, update_seat_status};
use actix_web::web;

pub fn config(cfg: &mut web::ServiceConfig) {
    cfg.service(get_seat_by_id);
    cfg.service(update_seat_status);
}
