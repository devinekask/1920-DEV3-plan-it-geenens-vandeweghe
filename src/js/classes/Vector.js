export default class Vector {
  constructor(x, y) {
    this.x = x;
    this.y = y;
  }
  set(x, y) {
    this.x = x;
    this.y = y;
    return this;
  }
  add(v) {
    this.x += v.x;
    this.y += v.y;
    return this;
  }
  sub(v) {
    this.x -= v.x;
    this.y -= v.y;
    return this;
  }
  mult(n) {
    this.x *= n;
    this.y *= n;
    return this;
  }
  div(n) {
    this.x /= n;
    this.y /= n;
    return this;
  }
  mag() {
    return Math.sqrt(this.x*this.x + this.y*this.y);
  }
  normalize() {
    let m = this.mag();
    if(m !== 0) {
      this.div(m);
    }
    return this;
  }
  limit(max) {
    if(this.mag() > max) {
      this.normalize();
      this.mult(max);
    }
    return this;
  }
  clone() {
    return new Vector(this.x, this.y);
  }
  static add(v1, v2) {
    return v1.clone().add(v2);
  }
  static sub(v1, v2) {
    return v1.clone().sub(v2);
  }
  static mult(v, n) {
    return v.clone().mult(n);
  }
  static div(v, n) {
    return v.clone().div(n);
  }
}
