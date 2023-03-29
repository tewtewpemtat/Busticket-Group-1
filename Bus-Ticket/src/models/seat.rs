use serde::{Deserialize, Serialize};
#[derive(Serialize, Deserialize)]
pub struct Seat {
    pub seatid: i32,
    pub seatnumber: i32,
    pub status: String,
    pub busid: i32,
    pub busname: String,
}
