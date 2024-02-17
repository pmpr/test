function download(cvs) {
  const downloadUrl = cvs.toDataURL();
  const a = document.createElement("a");
  a.href = downloadUrl;
  a.setAttribute("download", "SketchDownload");
  a.click();
}

const cvs = document.querySelector("canvas");
const ctx = cvs.getContext("2d");
const dpr = window.devicePixelRatio;
const dpi = 300;
let width = 2;
let height = 2;
cvs.width = width * dpi * dpr;
cvs.height = height * dpi * dpr;
ctx.scale(dpr, dpr);

download(cvs);