var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}function _possibleConstructorReturn(self, call) {if (!self) {throw new ReferenceError("this hasn't been initialised - super() hasn't been called");}return call && (typeof call === "object" || typeof call === "function") ? call : self;}function _inherits(subClass, superClass) {if (typeof superClass !== "function" && superClass !== null) {throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);}subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } });if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass;}var data = {
  code: "SASHATRAN",
  percent: 50 };var


Comments = function (_React$Component) {_inherits(Comments, _React$Component);
  function Comments(props) {_classCallCheck(this, Comments);var _this = _possibleConstructorReturn(this, (Comments.__proto__ || Object.getPrototypeOf(Comments)).call(this,
    props));
    _this.state = {
      count: 0,
      show: false };


    _this.purchaseItem = function (e) {
      _this.setState({
        count: _this.state.count + 1,
        show: true });


      _this.closeCard = function (e) {
        _this.setState({
          show: false });

      };
    };return _this;
  }_createClass(Comments, [{ key: "render", value: function render()

    {var
      show = this.state.show;var
      code = data.code,percent = data.percent;
      return (
        React.createElement("div", { className: "card-parent" },
          React.createElement("button", { onClick: this.purchaseItem }, " Buy "),
          React.createElement("div", { className: show ? "card show" : "card" },
            React.createElement("div", { className: "close", onClick: this.closeCard }, " "),
            React.createElement("div", null, " Get ", percent, "% off with the code "),
            React.createElement("div", { className: "code" }, " ", code, " "))));



    } }]);return Comments;}(React.Component);


ReactDOM.render(React.createElement(Comments, null), document.getElementById("app"));