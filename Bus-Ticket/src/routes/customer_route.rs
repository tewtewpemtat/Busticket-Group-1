use crate::handlers::customer_handler::{add_customer, delete_customer_by_id, get_customer_by_id};
use actix_web::web;

pub fn config(cfg: &mut web::ServiceConfig) {
    cfg.service(get_customer_by_id);
    cfg.service(add_customer);
    cfg.service(delete_customer_by_id);
}
